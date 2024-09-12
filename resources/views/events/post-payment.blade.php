<x-layout2>
    <x-slot:pagename>{{$pagename}}</x-slot:pagename>
    <div
        class="flex items-center justify-center flex-col h-auto bg-cream-bg py-20 gap-y-10 px-[25%] rounded-md bg-opacity-60 outline outline-1 shadow-lg">
        <h1 class="text-2xl text-center md:text-4xl font-bold">Thank You For Submitting!</h1>
        <img src="/image/confirm-payment.png" class="h-auto w-[150px] md:w-[330px]" alt="">
        <h1 class="text-2xl text-center md:text-4xl font-bold">You will be redirected to home page!</h1>
    </div>
</x-layout2>