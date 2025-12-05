<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Plums — Product Details (Tailwind)</title>
    <meta name="description" content="Professional product details page built with Tailwind CSS" />
    <!-- Tailwind CDN (for quick demo). For production, build with Tailwind CLI/PostCSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* small extras */
        .glass {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(6px);
        }

        .price-shadow {
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.03);
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-800 antialiased">
    <main class="max-w-6xl mx-auto p-6 lg:p-10">

        <nav class="text-sm text-gray-500 mb-6" aria-label="Breadcrumb">
            <ol class="flex items-center gap-2">
                <li><a href="#" class="hover:underline">Back to products</a></li>
                <li>•</li>
                <li class="text-gray-700">Plums</li>
            </ol>
        </nav>

        <section class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
            <div class="space-y-4">
                <div class="rounded-xl overflow-hidden bg-white p-6 shadow-sm">
                    <div class="relative">
                        <span class="absolute left-4 top-4 inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-red-500 text-white shadow">6% OFF</span>
                        <img src="{{$produit->image}}" alt="Plums" class="w-full h-96 object-cover rounded-lg" />
                    </div>
                    <div class="mt-4 flex gap-3 items-center">
                        <div class="w-16 h-16 rounded-md border p-1 flex items-center justify-center bg-white">
                            <img src="{{$produit->image}}" alt="thumb" class="w-full h-full object-cover rounded-sm" />
                        </div>
                        <div class="text-sm text-gray-500">High-resolution images • 4 views</div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-4 shadow-sm">
                    <h3 class="text-sm font-semibold text-gray-700 mb-2">About this product</h3>
                    <p class="text-sm text-gray-600 leading-relaxed">{{$produit->description}}</p>
                </div>
            </div>

            <!-- RIGHT: Product Info -->
            <aside class="sticky top-6">
                <div class="bg-white rounded-xl shadow p-6 lg:p-8">
                    <h1 class="text-2xl lg:text-3xl font-extrabold leading-tight">Parfun Complet <span class="text-base font-medium text-gray-500">• 100 ml</span></h1>

                    <div class="mt-4 flex items-end gap-4">
                        <div>
                            <div class="text-3xl lg:text-4xl font-extrabold price-shadow">{{$produit->prix}} DHs</div>
                            <div class="text-sm text-gray-400 line-through">{{$produit->prix}}</div>
                            <div class="text-sm text-green-600 font-medium mt-1">{{$produit->prix}}</div>
                            <div class="text-xs text-gray-400 mt-1">Inclusive of all taxes</div>
                        </div>

                        <div class="ml-auto text-right">
                            {{-- wishlist button removed --}}
                        </div>
                    </div>


                    <div class="mt-5 border rounded-lg p-4 bg-gray-50 flex items-center gap-4">
                        <div class="flex-1 text-sm">
                            <div class="font-medium">Delivery in 1-2 Jours</div>
                            <div class="text-xs text-gray-500">Shipment of 1 item</div>
                        </div>
                        <div class="text-sm font-medium text-green-600">In Stock</div>
                    </div>


                    <div class="mt-5">
                        <label for="qty" class="block text-sm font-medium text-gray-700 mb-2">Quantity <span class="text-xs text-gray-400">({{$produit->quantite}})</span></label>
                        <div class="flex items-center gap-3">
                            <div class="flex items-center rounded-lg border overflow-hidden">
                                <button id="dec" class="px-4 py-2 text-lg bg-white hover:bg-gray-100">−</button>
                                <input id="qty" type="number" value="1" min="1" max="10" class="w-16 text-center outline-none p-2" aria-label="Quantity" />
                                <button id="inc" class="px-4 py-2 text-lg bg-white hover:bg-gray-100">+</button>
                            </div>

                            <button id="addToCart" class="ml-auto flex-1 lg:flex-none bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg px-6 py-3 shadow">🛒 Add to Cart</button>
                        </div>
                        <p class="text-xs text-gray-400 mt-2">Max order limit: <strong class="text-gray-700">10 per customer</strong></p>
                    </div>

                    <hr class="my-6" />

                    <dl class="grid grid-cols-2 gap-x-6 gap-y-2 text-sm text-gray-600">
                        <div>
                            <dt class="text-xs text-gray-500">Origin</dt>
                            <dd class="mt-1">India</dd>
                        </div>
                        <div>
                            <dt class="text-xs text-gray-500">Storage</dt>
                            <dd class="mt-1">Store in dry place</dd>
                        </div>
                        <div>
                            <dt class="text-xs text-gray-500">Shipment</dt>
                            <dd class="mt-1">1 item</dd>
                        </div>
                        <div>
                            <dt class="text-xs text-gray-500">Tags</dt>
                            <dd class="mt-1">
                                <span class="inline-block px-3 py-1 rounded-full text-xs bg-green-50 text-green-700">Fruit</span>
                            </dd>
                        </div>
                    </dl>

                </div>


                <div class="mt-6 bg-white rounded-xl p-4 shadow-sm">
                    <button aria-expanded="false" class="w-full flex items-center justify-between py-2 px-1" id="toggleDetails">
                        <span class="font-medium">Nutrition & Details</span>
                        <svg id="chev" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06-.02L10 10.88l3.71-3.69a.75.75 0 111.06 1.06l-4.24 4.22a.75.75 0 01-1.06 0L5.25 8.25a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div id="detailsPanel" class="mt-3 hidden text-sm text-gray-600">
                        <ul class="list-disc pl-5 space-y-1">
                            <li>Calories: 46 kcal per 100g</li>
                            <li>Rich in vitamins A & C</li>
                            <li>Keep refrigerated for longer shelf life</li>
                        </ul>
                    </div>
                </div>

                <!-- Mobile sticky CTA -->
                <div id="mobileCta" class="fixed left-0 right-0 bottom-4 px-4 lg:hidden">
                    <div class="max-w-3xl mx-auto">
                        <button id="mobileAdd" class="w-full bg-green-600 text-white rounded-full py-3 font-semibold shadow-lg">🛒 Add to Cart — ₹450</button>
                    </div>
                </div>

            </aside>
        </section>
    </main>

    <script>
        // Wishlist / Cart logic
        const addBtn = document.getElementById('addToCart');
        const mobileAdd = document.getElementById('mobileAdd');

        function addToCartAction() {
            const qtyInput = document.getElementById('qty');
            const value = qtyInput ? qtyInput.value : 1;
            // Replace with real API call
            alert(`Added ${value} item(s) to cart`);
        }

        if (addBtn) addBtn.addEventListener('click', addToCartAction);
        if (mobileAdd) mobileAdd.addEventListener('click', addToCartAction);
    </script>
</body>

</html>