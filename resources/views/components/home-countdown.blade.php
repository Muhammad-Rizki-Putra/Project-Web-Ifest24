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
    <div class="animate-marquee whitespace-nowrap py-3 flex items-center justify-center">
        <span class="mx-4 text-7xl" x-text="'• ' +formatTime(remainingTime).days + ' Days left !!!'"></span>
        <span class="mx-4 text-7xl" x-text="'• ' +formatTime(remainingTime).days + ' Days left !!!'"></span>
        <span class="mx-4 text-7xl" x-text="'• ' +formatTime(remainingTime).days + ' Days left !!!'"></span>
        <span class="mx-4 text-7xl" x-text="'• ' +formatTime(remainingTime).days + ' Days left !!!'"></span>
        <span class="mx-4 text-7xl" x-text="'• ' +formatTime(remainingTime).days + ' Days left !!!'"></span>
        <span class="mx-4 text-7xl" x-text="'• ' +formatTime(remainingTime).days + ' Days left !!!'"></span>
        <span class="mx-4 text-7xl" x-text="'• ' +formatTime(remainingTime).days + ' Days left !!!'"></span>
        <span class="mx-4 text-7xl" x-text="'• ' +formatTime(remainingTime).days + ' Days left !!!'"></span>
        <span class="mx-4 text-7xl" x-text="'• ' +formatTime(remainingTime).days + ' Days left !!!'"></span>
        <span class="mx-4 text-7xl" x-text="'• ' +formatTime(remainingTime).days + ' Days left !!!'"></span>

        
    </div>
  </template>

  <template x-if="remainingTime <= 0">
    <div>
      <div>Countdown has ended!</div>
    </div>
  </template>
</div>
