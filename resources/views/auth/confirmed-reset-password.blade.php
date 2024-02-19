<x-guest-layout>
    <div class="w-full p-6">
    <container>

            <div class="mt-4">
                <x-input-label for="email " class="text-lg font-bold  -mb-1">
                    パスワード再設定</x-input-label>                
            </div>
            <div>
                <x-input-label class="font-normal -mb-1"> ご入力いただいたメールアドレス宛に再設定用を送信いたしました。</x-input-label> 
            </div>
            <div>
             <x-input-label class="font-normal  pb-6"> 送信されたメールよりパスワードの再設定をお願いいたします。</x-input-label> 
            </div>
            <div class="flex items-center justify-between mt-8 ">
                <button
                class="bg-basecolor text-white font-bold p-5 rounded-xl w-full focus:outline-none focus:bg-Red-700 hover:bg-red-700"
                type="submit"><a href="{{route('login')}}">ログイン画面へ戻る</button>
            </div>
    </form>
    </container>
    </div>
</x-guest-layout>