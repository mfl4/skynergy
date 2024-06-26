<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon - Skynergy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body class="bg-gradient-to-br from-indigo-500 to-purple-600 min-h-screen flex items-center justify-center text-white">
    <div class="container mx-auto px-4">
        <div class="text-center" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-5xl md:text-7xl font-bold mb-8">Skynergy</h1>
            <p class="text-xl md:text-2xl mb-12">Elevating skills through synergy, reaching new heights together.</p>

            <div class="mb-12">
                <h2 class="text-3xl font-semibold mb-4">Coming Soon</h2>
                <div class="flex justify-center space-x-4">
                    <div class="text-center">
                        <span class="text-4xl font-bold" id="days">00</span>
                        <p class="text-sm">Days</p>
                    </div>
                    <div class="text-center">
                        <span class="text-4xl font-bold" id="hours">00</span>
                        <p class="text-sm">Hours</p>
                    </div>
                    <div class="text-center">
                        <span class="text-4xl font-bold" id="minutes">00</span>
                        <p class="text-sm">Minutes</p>
                    </div>
                    <div class="text-center">
                        <span class="text-4xl font-bold" id="seconds">00</span>
                        <p class="text-sm">Seconds</p>
                    </div>
                </div>
            </div>

            <form class="max-w-md mx-auto" data-aos="fade-up" data-aos-delay="200">
                <div class="flex">
                    <input type="email" placeholder="Enter your email"
                        class="flex-grow px-4 py-2 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-purple-600 text-gray-900">
                    <button type="submit"
                        class="bg-purple-700 hover:bg-purple-800 px-6 py-2 rounded-r-lg transition duration-300">
                        Notify Me
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        AOS.init();

        // Set the date we're counting down to
        var countDownDate = new Date("June 28, 2024 07:00:00").getTime();

        // Update the countdown every 1 second
        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("days").innerHTML = days.toString().padStart(2, '0');
            document.getElementById("hours").innerHTML = hours.toString().padStart(2, '0');
            document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, '0');
            document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, '0');

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
</body>

</html>
