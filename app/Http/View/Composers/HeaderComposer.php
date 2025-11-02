<?php

namespace App\Http\View\Composers;

use App\Model\Admin\Category;
use App\Model\Admin\Config;
use App\Model\Admin\PostCategory;
use App\Model\Admin\Product;
use App\Model\Admin\Store;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HeaderComposer
{
    /**
     * Compose Settings Menu
     * @param View $view
     */
    public function compose(View $view)
    {
        $config = Config::query()->get()->first();
        $cartItems = \Cart::session('cartList')->getContent();
        $totalPriceCart = \Cart::session('cartList')->getTotal();

        // danh mục sản phẩm
        $categories = Category::query()
            ->with(['childs:id,parent_id'])
            ->where('parent_id', 0)
            ->orderBy('sort_order')
            ->get(['id','sort_order','name']);

        $cateIdToParent = [];
        $parentToCateIds = [];

        foreach ($categories as $cat) {
            $ids = $cat->childs->pluck('id')->all();
            $ids = array_merge([$cat->id], $ids);

            $parentToCateIds[$cat->id] = $ids;
            foreach ($ids as $cid) {
                $cateIdToParent[$cid] = $cat->id;
            }
        }

        $allCateIds = array_keys($cateIdToParent);

        $products = Product::query()
            ->where('status', 1)
            ->whereIn('cate_id', $allCateIds)
            ->latest()
            ->get(['id','name','slug','cate_id']);

        $grouped = [];
        foreach ($products as $p) {
            if (isset($cateIdToParent[$p->cate_id])) {
                $pid = $cateIdToParent[$p->cate_id];
                $grouped[$pid][] = $p;
            }
        }

        foreach ($categories as $cat) {
            $cat->setRelation('products', collect($grouped[$cat->id] ?? []));
        }


        // danh mục blog
        $postsCategory = PostCategory::query()
            ->where('type', PostCategory::TYPE_POST)
            ->where('parent_id', 0)->orderBy('sort_order')->get();

        $wishlistItems = \Cart::session('wishlist')->getContent();

        $view->with(['config' => $config, 'cartItems' => $cartItems,
            'totalPriceCart' => $totalPriceCart,
            'categories' => $categories, 'postsCategory' => $postsCategory,
            'wishlistItems' => $wishlistItems
        ]);
    }
}
