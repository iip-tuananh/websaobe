<?php

namespace App\Http\View\Composers;

use App\Model\Admin\About;
use App\Model\Admin\Block;
use App\Model\Admin\Category;
use App\Model\Admin\Config;
use App\Model\Admin\Consultant;
use App\Model\Admin\Partner;
use App\Model\Admin\Policy;
use App\Model\Admin\Post;
use App\Model\Admin\PostCategory;
use App\Model\Admin\Product;
use App\Model\Admin\Purpose;
use App\Model\Admin\PurposeProduct;
use App\Model\Admin\Store;
use Illuminate\View\View;

class FooterComposer
{
    /**
     * Compose Settings Menu
     * @param View $view
     */
    public function compose(View $view)
    {
        $config = Config::query()->get()->first();

        $polis = Policy::query()->where('status', 1)->get();

        $productsPurposeIds = PurposeProduct::query()
            ->distinct()
            ->pluck('product_id');
        $products = Product::query()
            ->select('id', 'name', 'price')
            ->whereIn('id', $productsPurposeIds)
            ->orderBy('id')
            ->get();
        $purposes = Purpose::query()
            ->with('products:id')
            ->latest()
            ->get();
        $blockImgPurpose = Block::query()->with('image')->find(2);

        $view->with(['config' => $config, 'polis' => $polis,
            'products' => $products,
            'purposes' => $purposes,
            'blockImgPurpose' => $blockImgPurpose
        ]);
    }
}
