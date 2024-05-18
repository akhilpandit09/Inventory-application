<section class="flex justify-around">
    <div class="flex gap-4 card w-2/5 bg-blue-900  text-white mt-4 hover:shadow-lg hover:bg-blue-950">
        <div class="card-body">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="card-title text-uppercase">Total Earnings</h2>
                </div>

                <div class="bg-blue-700 rounded-md w-12 h-12 flex justify-center items-center">
                    <i class="fa-solid fa-dollar-sign text-2xl"></i>
                </div>
            </div>
            <div>
                <p class="text-2xl font-bold mt-3">Rs {{ $totalPrice }}</p>
            </div>
            <div class="flex justify-between items-center">
                <div class="underline" id="chart-section"><a href="{{route('analytics.index')}}" >View Net Earnings</a></div>
            </div>
        </div>
    </div>

    <div class="flex gap-4 card w-80 bg-blue-900  text-white mt-4 hover:shadow-lg hover:bg-blue-950">
        <div class="card-body">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="card-title text-uppercase">Remaining Products</h2>
                </div>
                <div class="bg-blue-700 rounded-md w-12 h-12 flex justify-center items-center">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
            </div>
            <div>
                <p class="text-2xl font-bold mt-3">{{ $remainingProducts }}</p>
            </div>
            <div class="flex justify-between items-center">
                <div class="underline"><a href="">View Rem. Products</a></div>
            </div>
        </div>
    </div>

    <div class="flex gap-4 card w-80 bg-blue-900  text-white mt-4 hover:shadow-lg hover:bg-blue-950">
        <div class="card-body">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="card-title text-uppercase">Total Products</h2>
                </div>
                <div class="bg-blue-700 rounded-md w-12 h-12 flex justify-center items-center">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
            </div>
            <div>
                <p class="text-2xl font-bold mt-3">{{ $totalProducts }}</p>
            </div>
            <div class="flex justify-between items-center">
                <div class="underline"><a href="">View Total Products</a></div>
            </div>
        </div>
    </div>
</section>
