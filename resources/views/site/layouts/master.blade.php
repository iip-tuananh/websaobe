<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    @include('site.partials.head')
    @yield('css')
</head>

<body class="home page-template-default page page-id-2963  theme-yootheme woocommerce-no-js" ng-app="App">
    <div class="tm-page">
        @include('site.partials.header')

        @yield('content')


        @include('site.partials.footer')
    </div>


    <script type='text/javascript'>
        (function () {
            var c = document.body.className;
            c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
            document.body.className = c;
        })();
    </script>
    <link rel='stylesheet' id='wc-blocks-style-css'
          href='/site/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocksffe6.css?ver=wc-9.1.2' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='contact-form-7-css'
          href='/site/wp-content/plugins/contact-form-7/includes/css/styles1014.css?ver=5.9.7' type='text/css' media='all'/>
    <script type="text/javascript" id="kk-star-ratings-js-extra">
        /* <![CDATA[ */
        var kk_star_ratings = {
            "action": "kk-star-ratings",
            "endpoint": "https:\/\/kutieskin.vn\/wp-admin\/admin-ajax.php",
            "nonce": "a3bc0df702"
        };
        /* ]]> */
    </script>
    <script type="text/javascript"
            src="/site/wp-content/plugins/kk-star-ratings/src/core/public/js/kk-star-ratings.min23da.js?ver=5.4.8"
            id="kk-star-ratings-js"></script>
    <script type="text/javascript"
            src="/site/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min457f.js?ver=9.1.2"
            id="sourcebuster-js-js"></script>

    @include('site.partials.angular_mix')



    <script>
        var CSRF_TOKEN = "{{ csrf_token() }}";
    </script>

    <script>
        app.controller('headerPartial', function ($rootScope, $scope, cartItemSync, $interval, $window) {
            $scope.cart = cartItemSync;

            $scope.incrementQuantity = function (product) {
                product.quantity = Math.min(product.quantity + 1, 9999);
            };

            $scope.decrementQuantity = function (product) {
                product.quantity = Math.max(product.quantity - 1, 0);
            };

            $scope.changeQty = function (qty, item) {
                updateCart(qty, item)
            }

            function updateCart(qty, item) {
                jQuery.ajax({
                    type: 'POST',
                    url: "{{route('cart.update.item')}}",
                    headers: {
                        'X-CSRF-TOKEN': "{{csrf_token()}}"
                    },
                    data: {
                        product_id: item.id,
                        variant_id: item.attributes.variant_id,
                        qty: qty
                    },
                    beforeSend: function() {
                        jQuery('.loading-spin').show();
                        // showOverlay();
                    },
                    success: function (response) {
                        if (response.success) {
                            $scope.items = response.items;
                            $scope.total = response.total;
                            $scope.countItem = response.count;

                            $interval.cancel($rootScope.promise);

                            $rootScope.promise = $interval(function(){
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);

                            $scope.$applyAsync();
                        }
                    },
                    error: function (e) {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function () {
                        jQuery('.loading-spin').hide();
                        // hideOverlay();
                        $scope.$applyAsync();
                    }
                });
            }

            $scope.removeItem = function (product_id) {
                jQuery.ajax({
                    type: 'GET',
                    url: "{{route('cart.remove.item')}}",
                    data: {
                        product_id: product_id
                    },
                    success: function (response) {
                        if (response.success) {
                            $scope.items = response.items;
                            $scope.total = response.total;
                            $scope.total_qty = response.count;

                            $interval.cancel($rootScope.promise);

                            $rootScope.promise = $interval(function(){
                                cartItemSync.items = response.items;
                                cartItemSync.total = response.total;
                                cartItemSync.count = response.count;
                            }, 1000);

                            $scope.countItem = response.count;

                            $scope.$applyAsync();
                        }
                    },
                    error: function (e) {
                        toastr.error('Đã có lỗi xảy ra');
                    },
                    complete: function () {
                        $scope.$applyAsync();
                    }
                });
            }



            $scope.search = function () {
                if (!$scope.keywords || !$scope.keywords.trim()) {
                    alert('Vui lòng nhập từ khóa tìm kiếm!');
                    return;
                }

                // Xây URL cơ bản
                var url = '/tim-kiem?keywords=' + encodeURIComponent($scope.keywords.trim());

                // Điều hướng
                $window.location.href = url;
            };

        });


        app.factory('cartItemSync', function ($interval) {
            var cart = {items: null, total: null};

            cart.items = @json($cartItems);
            cart.count = {{$cartItems->sum('quantity')}};
            cart.total = {{$totalPriceCart}};

            return cart;
        });

    </script>

    <script>
    app.controller('footerCtrl', function ($rootScope, $scope, cartItemSync, $sce, $interval) {
        $scope.errors = [];
        $scope.cart = cartItemSync;

        $scope.submitOrder = function () {
            var url = "{{route('cart.submit.checkoutOrder')}}";
            var form = document.getElementById('orderForm');

            let rows = document.querySelectorAll('#table_form tbody tr');
            let products = [];
            rows.forEach(tr => {
                const qtyInp = tr.querySelector('.soluong');
                const qty    = parseInt(qtyInp.value || '0', 10);
                const price  = qtyInp.getAttribute('data-gia');
                const priceNum = parseFloat(price);
                const title  = tr.querySelector('.title').textContent.trim();
                const totalSpan = tr.querySelector('.tongtien');
                const totalNum  = parseFloat(totalSpan.getAttribute('data-tong') || '0');
                // Chỉ push khi quantity > 0
                if (qty > 0) {
                    products.push({
                        id: tr.id,
                        name: title,
                        price: (isNaN(priceNum) || priceNum <= 0) ? null : priceNum,
                        quantity: qty,
                        total: totalNum,
                        contact_price: (isNaN(priceNum) || priceNum <= 0) ? 1 : 0
                    });
                }
            });
            if (products.length === 0) {
                toastr.warning('Vui lòng chọn ít nhất 1 sản phẩm');
                return;
            }
// Tổng cộng & phí vận chuyển
            const grand = document.querySelector('.tong');
            const vcEl  = document.querySelector('.vanchuyen');
            const order_total = grand ? grand.textContent : '';
            const shipping_vnd = vcEl ? (vcEl.getAttribute('data-vc') || vcEl.textContent) : '';
            console.log(products);
            const fd = new FormData(form); // chứa các input trong #orderForm
            fd.append('order_total_text', order_total);
            fd.append('shipping_text', shipping_vnd);

            products.forEach((p, i) => {
                fd.append(`products[${i}][id]`, p.id);
                fd.append(`products[${i}][name]`, p.name);
                // nếu null -> gửi rỗng
                fd.append(`products[${i}][price]`, p.price == null ? '' : p.price);
                fd.append(`products[${i}][quantity]`, p.quantity);
                fd.append(`products[${i}][total]`, p.total);
                fd.append(`products[${i}][contact_price]`, p.contact_price);
            });


            $scope.loading = true;
            jQuery.ajax({
                type: 'POST',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': CSRF_TOKEN
                },
                data: fd,
                processData: false,
                contentType: false,
                success: function (response) {
                    if (response.success) {
                        toastr.success(response.message);
                        jQuery('#orderForm')[0].reset();
                        $scope.errors = [];
                        $scope.sendSuccess = true;
                        $scope.$apply();
                    } else {
                        $scope.errors = response.errors;
                        toastr.warning(response.message);
                    }
                },
                error: function () {
                    toastr.error('Đã có lỗi xảy ra');
                },
                complete: function () {
                    $scope.loading = false;
                    $scope.$apply();
                }
            });
        }
    })

    </script>

    @stack('scripts')
    <script>
        (function () {
            // Hủy handler gán trực tiếp
            ['onkeydown','onkeyup','onkeypress','oncontextmenu','onselectstart','oncopy','oncut']
                .forEach(k => { document[k] = null; window[k] = null; });

            // Chặn các listener đã đăng ký bằng addEventListener (bằng cách chặn lan truyền)
            const events = ['keydown','keyup','keypress','contextmenu','selectstart','copy','cut','paste','mousedown','mouseup'];
            for (const evt of events) {
                window.addEventListener(evt, function(e){
                    // cho phép bạn dùng lại phím/chuột phải
                    e.stopImmediatePropagation();
                    // cho các case đã gọi preventDefault trước đó
                    try { e.returnValue = true; } catch(_) {}
                }, {capture:true});
            }
        })();
    </script>




    <script defer>
    document.addEventListener('DOMContentLoaded', function(){
        const menuRoot = document.querySelector('.th-mobile-menu');
        if(!menuRoot) return;

        const viewport = menuRoot.querySelector('.mn-viewport');
        const track    = menuRoot.querySelector('.mn-track');
        const panels   = Array.from(menuRoot.querySelectorAll('.mn-panel'));
        const idToIdx  = Object.fromEntries(panels.map((p,i)=>[p.id, i]));
        const stack    = ['mn-root'];

        function setActive(id){
            const idx = idToIdx[id];
            if(idx == null) return;
            track.style.transform = `translateX(-${idx*100}%)`;
            requestAnimationFrame(()=> viewport && (viewport.style.height = panels[idx].scrollHeight+'px'));
        }
        setActive(stack[0]);

        function onNavEvent(e){
            // chỉ xử lý nếu click nằm trong menu
            if(!menuRoot.contains(e.target)) return;

            // tìm phần tử có data-target (ưu tiên chính phần tử, nếu không có tìm lên li)
            const el = e.target.closest('[data-target], .to-sub, .mn-back');
            if(!el) return;

            // Back trước
            if(el.classList.contains('mn-back')){
                e.preventDefault();
                if(stack.length > 1){ stack.pop(); setActive(stack[stack.length-1]); }
                return;
            }

            // Đi tới submenu
            let target = el.getAttribute('data-target');
            if(!target){
                const li = el.closest('li[data-target]');
                if(li) target = li.getAttribute('data-target');
            }
            if(!target) return;

            e.preventDefault();               // chặn <a> nhảy trang
            const id = target.replace('#','');
            if(!(id in idToIdx)) return;      // panel không tồn tại
            stack.push(id);
            setActive(id);
        }

        // dùng capture để “đón” sự kiện trước khi script khác chặn
        menuRoot.addEventListener('click', onNavEvent, true);
        menuRoot.addEventListener('pointerup', onNavEvent, true);
        menuRoot.addEventListener('touchend', onNavEvent, {capture:true, passive:false});

        window.addEventListener('resize', ()=> setActive(stack[stack.length-1]), {passive:true});
    });
</script>

</body>

</html>
