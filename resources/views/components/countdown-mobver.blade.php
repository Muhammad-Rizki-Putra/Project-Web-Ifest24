<div
  x-data="{
    endDate: new Date('{{ $slot }}T23:59:59').getTime(),
    remainingTime: 0,
    formatTime(time) {
      const days = Math.floor(time / (1000 * 60 * 60 * 24));
      const hours = Math.floor((time % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((time % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((time % (1000 * 60)) / 1000);
      return { days, hours, minutes, seconds };
    }
  }"
  x-init="() => {
    setInterval(() => {
      const now = new Date().getTime();
      const remainingTime = endDate - now;
      $data.remainingTime = remainingTime > 0 ? remainingTime : 0;
    }, 1000);
  }"
>
  <template x-if="remainingTime > 0">
    <div class="flex items-center justify-center w-[100%] bg-[#a00344] text-white p-4 rounded-xl space-x-8">
      <div class="flex flex-col items-center justify-center">
        <div class="text-xl font-bold" x-text="formatTime(remainingTime).days"></div>
        <div class="text-xs">Days</div>
      </div>

      <div class="flex flex-col items-center justify-center">
        <div class="text-xl font-bold" x-text="formatTime(remainingTime).hours"></div>
        <div class="text-xs">Hours</div>
      </div>

      <div class="flex flex-col items-center justify-center">
        <div class="text-xl font-bold" x-text="formatTime(remainingTime).minutes"></div>
        <div class="text-xs">Minutes</div>
      </div>

      <div class="flex flex-col items-center justify-center">
        <div class="text-xl font-bold" x-text="formatTime(remainingTime).seconds"></div>
        <div class="text-xs">Seconds</div>
      </div>
    </div>
  </template>

  <template x-if="remainingTime <= 0">
    <div class="flex items-center justify-center w-[200%] ml-[-50%] bg-[#a00344] text-white p-4 rounded-xl space-x-8">
      <div class="font-bold text-xl">Countdown has ended!</div>
    </div>
  </template>
</div>
