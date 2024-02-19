<x-app-layout>
  <div class="mb-4 flex justify-center">
    <x-label class="text-xl">クーポン</x-label>                
  </div>
    <!--<div class="m-tab relative">
      <div class="m-tab_nav flex sticky top-0">
        <button class="m-tab_link w-full bg-gray-100 p-4" data-tab="Tab1">特別クーポン</button>
        <button class="m-tab_link w-full bg-gray-100 p-4" data-tab="Tab2">クーポン</button>
      </div>
      <div class="p-6">
        <div id="Tab1" class="m-tab_content">
          <p>タブ1の内容</p>
          <div class="flex flex-wrap -m-2">
            <div class="w-1/2 p-2">
              @foreach($coupons as $coupon) 
              <div>
               <a href="/coupons/{{$coupon->id}}"><img class="rounded-lg " src="{{$coupon->img_path}}"
                    alt="image description"></a>
                    <dl>
                      <dt class="font-bold text-sm pt-2 py-0.5">クーポン名が入ります</dt>
                      <dd class="text-xs text-gray-700">2024/00/00まで</dd>
                    </dl>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div id="Tab2" class="m-tab_content">
          <p>タブ2の内容</p>
          <div class="flex flex-wrap -m-2">
            <div class="w-1/2 p-2">
              @foreach($coupons as $coupon)
              <div>
                <a href="/coupons/{{$coupon->id}}"><img class="rounded-lg " src="{{$coupon->img_path}}"
                    alt="image description"></a>
                    <dl>
                      <dt class="font-bold text-sm pt-2 py-0.5">クーポン名が入ります</dt>
                      <dd class="text-xs text-gray-700">2024/00/00まで</dd>
                    </dl>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
-->
<!--
    <div class="grid grid-cols-2 gap-1">
        @foreach($coupons as $coupon) <div>
            <a href="/coupons/{{$coupon->id}}"><img class="rounded-lg " src="{{$coupon->img_path}}"
                    alt="image description"></a>
        </div>
        @endforeach
    </div>
-->

   <div class="m-tab relative">
      <div class="m-tab_nav flex sticky top-0">
        <button class="m-tab_link w-full bg-gray-100 p-4" data-tab="Tab1">特別クーポン</button>
        <button class="m-tab_link w-full bg-gray-100 p-4" data-tab="Tab2">クーポン</button>
      </div>
      <div class="p-6">
        <div id="Tab1" class="m-tab_content">
          <p>特別クーポン</p>
          <div class="flex flex-wrap -m-2">
            <div class="w-1/2 p-2">
            <a href="/coupons/{{$coupon->id}}"><img class="rounded-lg " src="{{$coupon->img_path}}"
                    alt="image description">
                <dl> 
                  <dt class="font-bold text-sm pt-2 py-0.5">クーポン名が入ります</dt>
                  <dd class="text-xs text-gray-700">2024/00/00まで</dd>
                </dl>
              </a>
            </div>
            <div class="w-1/2 p-2">
            <a href="/coupons/{{$coupon->id}}"><img class="rounded-lg " src="{{$coupon->img_path}}"
                    alt="image description">
                <dl>
                  <dt class="font-bold text-sm pt-2 py-0.5">クーポン名が入ります</dt>
                  <dd class="text-xs text-gray-700">2024/00/00まで</dd>
                </dl>
              </a>
            </div>
            <div class="w-1/2 p-2">
              <a href="#">
                <img src="http://localhost/best_app_backed/src/public/img/bnr_square.png" alt="" class="w-full">
                
              </a>
            </div>
            <div class="w-1/2 p-2">
              <a href="#">
                <img src=".png" alt="" class="w-full">
                <dl>
                  <dt class="font-bold text-sm pt-2 py-0.5">クーポン名が入ります</dt>
                  <dd class="text-xs text-gray-700">2024/00/00まで</dd>
                </dl>
              </a>
            </div>
            <div class="w-1/2 p-2">
              <a href="#">
                <img src=".png" alt="" class="w-full">
                <dl>
                  <dt class="font-bold text-sm pt-2 py-0.5">クーポン名が入ります</dt>
                  <dd class="text-xs text-gray-700">2024/00/00まで</dd>
                </dl>
              </a>
            </div>
            <div class="w-1/2 p-2">
              <a href="#">
                <img src=".png" alt="" class="w-full">
                <dl>
                  <dt class="font-bold text-sm pt-2 py-0.5">クーポン名が入ります</dt>
                  <dd class="text-xs text-gray-700">2024/00/00まで</dd>
                </dl>
              </a>
            </div>
          </div>
        </div>
        <div id="Tab2" class="m-tab_content">
          <p>クーポン</p>
          <div class="flex flex-wrap -m-2">
            <div class="w-1/2 p-2">
              <a href="#">
                <img src=".png" alt="" class="w-full">
                <dl>
                  <dt class="font-bold text-sm pt-2 py-0.5">クーポン名が入ります</dt>
                  <dd class="text-xs text-gray-700">2024/00/00まで</dd>
                </dl>
              </a>
            </div>
            <div class="w-1/2 p-2">
              <a href="#">
                <img src=".png" alt="" class="w-full">
                <dl>
                  <dt class="font-bold text-sm pt-2 py-0.5">クーポン名が入ります</dt>
                  <dd class="text-xs text-gray-700">2024/00/00まで</dd>
                </dl>
              </a>
            </div>
            <div class="w-1/2 p-2">
              <a href="#">
                <img src=".png" alt="" class="w-full">
                <dl>
                  <dt class="font-bold text-sm pt-2 py-0.5">クーポン名が入ります</dt>
                  <dd class="text-xs text-gray-700">2024/00/00まで</dd>
                </dl>
              </a>
            </div>
            <div class="w-1/2 p-2">
              <a href="#">
                <img src=".png" alt="" class="w-full">
                <dl>
                  <dt class="font-bold text-sm pt-2 py-0.5">クーポン名が入ります</dt>
                  <dd class="text-xs text-gray-700">2024/00/00まで</dd>
                </dl>
              </a>
            </div>
            <div class="w-1/2 p-2">
              <a href="#">
                <img src=".png" alt="" class="w-full">
                <dl>
                  <dt class="font-bold text-sm pt-2 py-0.5">クーポン名が入ります</dt>
                  <dd class="text-xs text-gray-700">2024/00/00まで</dd>
                </dl>
              </a>
            </div>
            <div class="w-1/2 p-2">
              <a href="#">
                <img src=".png" alt="" class="w-full">
                <dl>
                  <dt class="font-bold text-sm pt-2 py-0.5">クーポン名が入ります</dt>
                  <dd class="text-xs text-gray-700">2024/00/00まで</dd>
                </dl>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>


</x-app-layout>