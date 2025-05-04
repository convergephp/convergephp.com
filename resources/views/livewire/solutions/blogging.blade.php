<section class="relative mx-auto my-4 w-full max-w-7xl px-2">
    <div class="w-full">
        <div
             class="bg-base-100 rounded-box inline-flex w-full flex-col items-center justify-end gap-10 px-10 pb-10 pt-10 md:gap-16 md:px-16 md:pt-16 lg:gap-28">
            <div class="flex flex-col items-center justify-end gap-10 lg:gap-16">
                <div class="flex flex-col items-center justify-center gap-10">
                    <h2 class="font-manrope text-accent text-center text-xl font-bold leading-normal md:text-2xl">
                        Converge Blogging
                    </h2>
                    <div class="flex flex-col items-center justify-start gap-2.5">
                        <h2 class="font-manrope text-primary text-center text-5xl font-bold leading-normal md:text-6xl">
                            Coming Soon</h2>
                        <p class="text-base-content/50 text-center text-base font-normal leading-relaxed">
                            Fully featured Open Source Blogging framework for Laravel
                        </p>
                    </div>

                    {{-- TIMER --}}
                    {{-- <div class="count-down-main flex w-full items-start justify-center gap-2">
                        <div class="timer flex flex-col gap-0.5">
                            <div class="">
                                <h3
                                    class="countdown-element days font-manrope text-base-content text-center text-2xl font-bold leading-9">
                                </h3>
                            </div>
                            <p class="text-base-content/50 w-full text-center text-xs font-normal leading-normal">DAYS
                            </p>
                        </div>
                        <h3 class="font-manrope text-base-content w-3 text-center text-2xl font-medium leading-9">:</h3>
                        <div class="timer flex flex-col gap-0.5">
                            <div class="">
                                <h3
                                    class="countdown-element hours font-manrope text-base-content text-center text-2xl font-bold leading-9">
                                </h3>
                            </div>
                            <p class="text-base-content/50 w-full text-center text-xs font-normal leading-normal">HRS
                            </p>
                        </div>
                        <h3 class="font-manrope text-base-content w-3 text-center text-2xl font-medium leading-9">:</h3>
                        <div class="timer flex flex-col gap-0.5">
                            <div class="">
                                <h3
                                    class="countdown-element minutes font-manrope text-base-content text-center text-2xl font-bold leading-9">
                                </h3>
                            </div>
                            <p class="text-base-content/50 w-full text-center text-xs font-normal leading-normal">MINS
                            </p>
                        </div>
                        <h3 class="font-manrope text-base-content w-3 text-center text-2xl font-medium leading-9">:</h3>
                        <div class="timer flex flex-col gap-0.5">
                            <div class="">
                                <h3
                                    class="countdown-element seconds font-manrope text-base-content text-center text-2xl font-bold leading-9">
                                </h3>
                            </div>
                            <p class="text-base-content/50 w-full text-center text-xs font-normal leading-normal">SECS
                            </p>
                        </div>
                    </div>
                    <div class="flex w-full flex-col items-center justify-center gap-5">
                        <h6 class="text-primary text-center text-base font-semibold leading-relaxed">Launched Date:
                            June 01, 2025</h6>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<!--Javascript-->
{{-- <script>
    // count-down timer
    let dest = new Date("June 01, 2025 23:59:59").getTime();
    let x = setInterval(function() {
        let now = new Date().getTime();
        let diff = dest - now;
        // Check if the countdown has reached zero or negative
        if (diff <= 0) {
            // Set the destination date to the same day next month
            let nextMonthDate = new Date();
            nextMonthDate.setMonth(nextMonthDate.getMonth() + 1);

            // If the current month is December, set the destination date to the same day next year
            if (nextMonthDate.getMonth() === 0) {
                nextMonthDate.setFullYear(nextMonthDate.getFullYear() + 1);
            }

            dest = nextMonthDate.getTime();
            return; // Exit the function
        }

        let days = Math.floor(diff / (1000 * 60 * 60 * 24));
        let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((diff % (1000 * 60)) / 1000);

        if (days < 10) {
            days = `0${days}`;
        }

        if (hours < 10) {
            hours = `0${hours}`;
        }
        if (minutes < 10) {
            minutes = `0${minutes}`;
        }
        if (seconds < 10) {
            seconds = `0${seconds}`;
        }

        // Get elements by class name
        let countdownElements = document.getElementsByClassName("countdown-element");

        // Loop through the elements and update their content
        for (let i = 0; i < countdownElements.length; i++) {
            let className = countdownElements[i].classList[1]; // Get the second class name
            switch (className) {
                case "days":
                    countdownElements[i].innerHTML = days;
                    break;
                case "hours":
                    countdownElements[i].innerHTML = hours;
                    break;
                case "minutes":
                    countdownElements[i].innerHTML = minutes;
                    break;
                case "seconds":
                    countdownElements[i].innerHTML = seconds;
                    break;
                default:
                    break;
            }
        }
    }, 10);
</script> --}}
