UIkit.icon.add('like','<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.33203 9.68555V18.0449L5.33789 9.68555H5.33203ZM15.8438 7.96094H9.70312L9.89062 4.08594C9.90234 3.85352 9.79883 3.63477 9.60547 3.49023C9.48633 3.40234 9.33984 3.35742 9.19336 3.35938C8.81055 3.36133 8.47266 3.62109 8.36914 3.99023C7.64453 6.61523 7.10156 8.58398 6.73828 9.89844V16.6406H14.5391C14.7343 16.5531 14.9001 16.4111 15.0165 16.2316C15.1329 16.0521 15.195 15.8428 15.1953 15.6289C15.1953 15.4395 15.1504 15.2598 15.0605 15.0957L14.7891 14.5996L15.2168 14.2285C15.3372 14.1242 15.4337 13.9953 15.4998 13.8503C15.5658 13.7054 15.5999 13.5479 15.5996 13.3887C15.5996 13.1992 15.5547 13.0195 15.4648 12.8555L15.1934 12.3594L15.6211 11.9883C15.7415 11.884 15.838 11.755 15.9041 11.6101C15.9701 11.4652 16.0042 11.3077 16.0039 11.1484C16.0039 10.959 15.959 10.7793 15.8691 10.6152L15.5957 10.1172L16.0234 9.74609C16.1438 9.64182 16.2403 9.51283 16.3064 9.36791C16.3725 9.22298 16.4065 9.06552 16.4062 8.90625C16.4062 8.5332 16.1914 8.17383 15.8438 7.96094V7.96094Z" fill="black" fill-opacity="0.15"/><path d="M2.1875 10.3125V17.4219C2.1875 17.7676 2.4668 18.0469 2.8125 18.0469H4.08203V9.68751H2.8125C2.4668 9.68751 2.1875 9.9668 2.1875 10.3125ZM17.3027 10.4238C17.6309 9.99024 17.8125 9.45899 17.8125 8.90626C17.8125 8.0293 17.3223 7.19727 16.5332 6.73829C16.3301 6.61914 16.0988 6.55643 15.8633 6.55665H11.1777L11.2949 4.15626C11.3242 3.57618 11.1191 3.0254 10.7187 2.60548C10.5234 2.3983 10.2875 2.23348 10.0258 2.12126C9.76404 2.00905 9.48204 1.95182 9.19727 1.95313C8.18164 1.95313 7.2832 2.63673 7.01367 3.61524L5.33789 9.68555L5.33203 18.0449H14.5527C14.7344 18.0449 14.9082 18.0098 15.0703 17.9395C16 17.543 16.5996 16.6348 16.5996 15.627C16.5996 15.3809 16.5645 15.1387 16.4941 14.9043C16.8223 14.4707 17.0039 13.9395 17.0039 13.3867C17.0039 13.1406 16.9688 12.8984 16.8984 12.6641C17.2266 12.2305 17.4082 11.6992 17.4082 11.1465C17.4082 10.9004 17.373 10.6582 17.3027 10.4238ZM16.0234 9.7461L15.5957 10.1172L15.8691 10.6152C15.9586 10.7787 16.005 10.9622 16.0039 11.1484C16.0039 11.4707 15.8652 11.7774 15.6211 11.9883L15.1934 12.3594L15.4648 12.8555C15.5543 13.0189 15.6007 13.2024 15.5996 13.3887C15.5996 13.7109 15.4609 14.0176 15.2168 14.2285L14.7891 14.5996L15.0605 15.0957C15.15 15.2591 15.1964 15.4426 15.1953 15.6289C15.1953 16.0664 14.9375 16.4609 14.5391 16.6406H6.73828V9.89844C7.10156 8.58594 7.64453 6.61719 8.36914 3.99024C8.41977 3.81006 8.52747 3.65117 8.67609 3.53742C8.82471 3.42367 9.00621 3.3612 9.19336 3.35938C9.33984 3.35743 9.48633 3.40235 9.60547 3.49024C9.79883 3.63477 9.90234 3.85352 9.89062 4.08594L9.70312 7.96094H15.8438C16.1914 8.17384 16.4062 8.53321 16.4062 8.90626C16.4062 9.22852 16.2676 9.53516 16.0234 9.7461Z" fill="black"/></svg>');

function plus()
{
   let val =  document.querySelector('#button-incret .uk-input');
   val.value =parseInt(val.value) + 1;
}
function minus()
{

   let val =  document.querySelector('#button-incret .uk-input');
   if(parseInt(val.value) > 0)
   {
    val.value = parseInt(val.value) - 1;
   }

}

function phuongxa(e)
{
    console.log(e.value);
    let button = document.querySelector('#ju-filter');
    button.classList.remove('uk-active');
    button.setAttribute('uk-filter-control',e.value);
    button.click();
    button.classList.add('uk-active');
}
function check_dathang(tong)
{
    let check =  false;
    let count = 0;
    let soluong = document.querySelectorAll('#dathang .soluong');
    let  nguong = document.querySelector('#dathang').dataset.nguong;
    soluong.forEach(item=>{
        count += parseInt(item.value);
    });
    if(count > 1 &&  parseFloat(tong) >= parseFloat(nguong))
    {
        check = true;
    }
    return check;
}
function thaydoi(e)
{
    let parent = e.parentElement.parentElement;
    let thanhtien = parent.children[1].getAttribute('data-price');
    let tien = thanhtien*e.value;

    parent.querySelector('.thanhtien').innerHTML = tien.toLocaleString('vn-VI')+'đ';
    parent.querySelector('.thanhtien').setAttribute('data-tt',tien);
    // console.log(tien);
    let list = document.querySelectorAll('.thanhtien');
    let tong = 0;
    list.forEach(element => {
        tong = tong + parseInt(element.getAttribute('data-tt'));
    });
    console.log(check_dathang(tong));
    // let gia = document.querySelectorAll()
    if(check_dathang(tong))
    {
        document.querySelector('.phi').innerHTML = 'Miễn phí';
    }
    else
    {
        let phi =  document.querySelector('.phi');
        let ship = phi.getAttribute('data-phi') ;
        phi.innerHTML = parseFloat(ship).toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
        tong = tong + parseFloat(ship);
    }
    document.querySelector('.tong').innerHTML = tong.toLocaleString('vn-VI')+'đ';
    let noidung = parent.querySelector('.title').innerHTML + ' Giá thành: ' + thanhtien + ' Số lượng: ' + e.value + ' Thành tiền : ' + tien;
    // let id = 'id'+e.getAttribute('data-id');
    // let setcontent = document.querySelector('#'+id);
    // setcontent.value = noidung;
}
function dathang(e)
{
    let list = document.querySelectorAll('#dathang tbody tr');
    let products = [];
    list.forEach(element=>{

        let item = document.querySelector('#id'+element.id);
        let gia = element.querySelector('.gia');
        let soluong =  element.querySelector('.soluong').value;
        // item.value = element.querySelector('.title').innerHTML +':'+ element.querySelector('.gia').getAttribute('data-price') + 'x' + element.querySelector('.soluong').value + ' = ' + element.querySelector('.thanhtien').innerHTML;
        let product = {
            id: element.id,
            price : element.querySelector('.gia').getAttribute('data-price'),
            quantity  : element.querySelector('.soluong').value,
            name : element.querySelector('.title').innerHTML,
            total : element.querySelector('.thanhtien').innerHTML
        };
        products.push(product);
    });
    let  donhang = document.querySelector('textarea[name="donhang"]');
	console.log(donhang);
    donhang.value = JSON.stringify(products);
    if(donhang.value != '')
    {
        document.querySelector('.dathang').click();
    }
    else
    {
        console.log('Rỗng');
    }

}

function formatVND(n){ return (n||0).toLocaleString('vi-VN') + 'đ'; }

function chonloai(sel){
    const list = document.querySelectorAll('#table_form .soluong');
    document.querySelector('#table_form tbody').classList.remove('uk-hidden');
    const arr = sel.value.split("-");
    for(let i=0;i<arr.length;i++){ list[i].value = arr[i]; }
    list.forEach(el => soluong(el));
}


function check_soluong(tongtien)
{
    let list = document.querySelectorAll('#table_form .soluong');
    let nguong = document.querySelector('#table_form').dataset.nguong;
    let count = 0;
    list.forEach(item=>{
       count += parseInt(item.value);
    });
    console.log(count);
    let check = false;
    if(count > 1 && parseFloat(tongtien) > parseFloat(nguong))
    {
        check = true;
    }
    return check;
}
function soluong(input){
    var qty = Math.max(0, parseInt(input.value || '0', 10));
    var priceRaw = input.getAttribute('data-gia');
    var price = parseFloat(priceRaw);

    var rowTotal = 0;
    var tongEl = input.closest('tr').querySelector('.tongtien');

    if (isNaN(price) || price <= 0) {
        // Không có giá → không tính tiền
        tongEl.setAttribute('data-tong', 0);
        tongEl.textContent = qty > 0 ? 'Liên hệ' : '0đ';
    } else {
        rowTotal = qty * price;
        tongEl.setAttribute('data-tong', rowTotal);
        tongEl.textContent = formatVND(rowTotal);
    }

    // Tính tổng đơn
    var sum = 0;
    document.querySelectorAll('#table_form .tongtien').forEach(function(el){
        var v = parseFloat(el.getAttribute('data-tong') || '0');
        if (!isNaN(v)) sum += v;
    });

    // Vận chuyển
    var vanchuyen = document.querySelector('.vanchuyen');
    if (check_soluong(sum)) {
        vanchuyen.setAttribute('data-vc','mienphi');
        vanchuyen.textContent = 'Miễn phí';
    } else {
        var vcRaw = parseFloat(vanchuyen.getAttribute('data-format') || '0');
        if (!isNaN(vcRaw) && vcRaw > 0) {
            vanchuyen.setAttribute('data-vc', vcRaw);
            vanchuyen.textContent = vcRaw.toLocaleString('vi-VN', { style:'currency', currency:'VND' });
            sum += vcRaw;
        } else {
            vanchuyen.textContent = '0đ';
        }
    }

    document.querySelector('.tong').textContent = formatVND(sum);
}
function mua_ngay(e)
{
    e.closest('#button-cart').querySelector('.ajax_add_to_cart').click();
    window.location.replace("https://kutieskin.vn/gio-hang");
}
function datamua(e)
{
    let list = document.querySelectorAll('#table_form tbody tr');
    let products = [];
    list.forEach(element=>{

//         let item = document.querySelector('#id'+element.id);
//         item.value = element.querySelector('.title').innerHTML +':' + element.querySelector('.soluong').getAttribute('data-gia') +'x'+ element.querySelector('.soluong').value + '=' + element.querySelector('.tongtien').innerHTML;
        let product = {
            id: element.id,
            price : element.querySelector('.soluong').getAttribute('data-gia'),
            quantity  : element.querySelector('.soluong').value,
            name : element.querySelector('.title').innerHTML,
            total : element.querySelector('.tongtien').innerHTML
        };
        products.push(product);
    });
    console.log(products);
    // let donhang = document.querySelector('textarea[name="donhang"]');
    // donhang.value = JSON.stringify(products);
    // document.querySelector('.homegui').click();
}


document.addEventListener( 'wpcf7mailsent', function( event ) {
    if('4145' == event.detail.contactFormId)
    {
        window.location.replace('https://kutieskin.vn/trang-cam-on');
    }

}, false );
document.addEventListener("DOMContentLoaded", function(event) {
   jQuery( document.body ).on( 'updated_cart_totals', function(){
     console.log('test');
   });
    const muangay  = document.querySelector('#mua-ngay .el-item:first-child a.el-content');
    if(muangay != null)
    {
         muangay.addEventListener('click',function(){
            document.querySelector('.single_add_to_cart_button').click();
            jQuery( document.body ).on( 'added_to_cart', function(){
                window.location.replace("https://kutieskin.vn/gio-hang");
            });


         });
    }
    list = document.querySelectorAll('#binhluan a.el-content');
    if(list != null)
    {

        list.forEach(element => {
            let href = element.getAttribute('href');

            element.addEventListener('click', function () {
                let ju = document.querySelectorAll('.ju-active');
                ju.forEach(element=>{
                    element.classList.remove('ju-active');
                });
                document.querySelector(href).classList.add('ju-active');
            });

        })
    }

  });

function muangay(e)
{
	e.classList.add('muangay-active')
    document.querySelector('.add_cart').click();
}
jQuery(document).ready(function($) {
    $('.add_cart').on('click', function(e){
    e.preventDefault();
    $thisbutton = $(this),
                $form = $thisbutton.closest('form.cart'),
                id = $thisbutton.val(),
                product_qty = $form.find('input[name=quantity]').val() || 1,
                product_id = $form.find('input[name=product_id]').val() || id,
                variation_id = $form.find('input[name=variation_id]').val() || 0;
    var data = {
            action: 'ql_woocommerce_ajax_add_to_cart',
            product_id: product_id,
            product_sku: '',
            quantity: product_qty,
            variation_id: variation_id,
        };
    $.ajax({
            type: 'post',
            url: wc_add_to_cart_params.ajax_url,
            data: data,
            beforeSend: function (response) {
                $thisbutton.removeClass('added').addClass('loading');
            },
            complete: function (response) {
                $thisbutton.addClass('added').removeClass('loading');
            },
            success: function (response) {
                if (response.error & response.product_url) {
                    window.location = response.product_url;
                    return;
                } else {
					var muangay = document.querySelector('.muangay-active');
                    $(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash, $thisbutton]);
					if(muangay != null)
					{
						 window.location.replace("https://kutieskin.vn/gio-hang");
					}
                }
            },
        });
     });
});

document.addEventListener("DOMContentLoaded", function(event) {
        jQuery( function($){
            $(document.body).on('updated_checkout', function () {
                const ship_method = document.querySelectorAll('#shipping_method li');
                let list = document.querySelectorAll('.input-text.qty');
                console.log(list.length)
                if(ship_method != null)
                {
                    if(ship_method.length == 2)
                    {
                        let total = document.querySelector('.order-total .woocommerce-Price-amount bdi');
                        let string1 = parseInt(total.innerText.replace(/[.₫]/g, ''));
                        console.log(string1);
                        if(string1 >= 150000 && string1 != 255000 && string1 != 225000)
                        {


                            document.querySelector('#order_review').classList.add('uk-active');
                            document.querySelector('#order_review').classList.remove('ju-active');
                            console.log(ship_method['1']);
                            ship_method['1'].querySelector('.shipping_method').click();
                            // ship_method['0'].parentElement.
                        }
                        else
                        {

                            document.querySelector('#order_review').classList.remove('uk-active');
                            document.querySelector('#order_review').classList.add('ju-active');
                            ship_method['0'].querySelector('.shipping_method').click();
                        }

                    }
                    else
                    {
                        document.querySelector('#order_review').classList.remove('uk-active');
                    }
                }
            });
        });


        const juscroll = document.querySelectorAll('.ju-scroll .uk-icon');
        if(juscroll != null)
        {

            juscroll.forEach(element=>{
                element.removeAttribute('uk-nav-parent-icon');
                element.setAttribute('uk-icon','icon:plus;ratio:0.5');
            })
        }
        const slider = document.querySelector('#slider_product ul.products');
        if(slider != null)
        {
            UIkit.slider('#slider_product',{autoplay:true});
            const ul = document.querySelector('#slider_product ul.products')
            ul.classList.add('uk-slider-items');
            const a1 = document.createElement("a"),a2 = document.createElement("a"),dotnav = document.createElement('ul'),li = document.createElement('li');
            dotnav.classList.add('uk-slider-nav','uk-dotnav','uk-flex-center');
            a1.classList.add('uk-position-center-left','uk-position-small');
            a2.classList.add('uk-position-center-right','uk-position-small');
            a1.setAttribute('href','#');
            a2.setAttribute('href','#');
            a1.setAttribute('uk-slidenav-previous','');
            a2.setAttribute('uk-slidenav-next','');
            a1.setAttribute('uk-slider-item','previous');
            a2.setAttribute('uk-slider-item','next');
            ul.parentElement.append(a1);
            ul.parentElement.append(a2);
            document.querySelector('#slider_product').append(dotnav);
            console.log(a1);
        }


  });
  jQuery( function( $ ) {
	$('.woocommerce').on('change', 'input.qty', function(){
		$("[name='update_cart']").trigger("click");
	});
} );
jQuery( function( $ ) {
	let timeout;
	$('.woocommerce').on( 'change', 'input.qty', function(){
		if ( timeout !== undefined ) {
			clearTimeout( timeout );
		}
		timeout = setTimeout(function() {
			$("[name='update_cart']").trigger("click"); // trigger cart update
		}, 1000 ); // 1 second delay, half a second (500) seems comfortable too
	});
} );
