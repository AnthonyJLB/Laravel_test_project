<x-guest-layout>
    <div class="w-full p-6">
    <container>
            <div class="mb-8 flex justify-center">
                <x-input-label for="password " class="text-black font-bold">
                    パスワード再設定しました。</x-input-label>                
            </div>  
            <div class="flex items-center justify-between mt-8">
                <x-primary-button
                    class="bg-basecolor text-white font-bold p-5 rounded-xl w-full focus:outline-none focus:bg-Red-700 hover:bg-red-700"
                    type="submit"><a href="{{route('login')}}">ログイン画面へ戻る</x-primary-button>
            </div>
    </container>
    </div>
</x-guest-layout>