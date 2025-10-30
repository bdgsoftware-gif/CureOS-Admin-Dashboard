@extends('layouts.vertical', ['title' => 'Basic Table', 'subTitle' => 'Table', 'pageTitle' => 'Basic'])

@section('content')

<div class="grid xl:grid-cols-2 grid-cols-1 gap-6">
    <div class="card">
        <div class="p-6">
            <h3 class="card-title mb-4">Basic example</h3>

            <div class="overflow-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Name</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Phone Number</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Date of Birth</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Country</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Risa D. Pearson</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">336-508-2157</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">July 24, 1950</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">India</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Ann C. Thompson</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">646-473-2057</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">January 25, 1959</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">USA</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Paul J. Friend</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">281-308-0793</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">September 1, 1939</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Canada</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Linda G. Smith</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">606-253-1207</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">May 3, 1962</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Brazil</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h3 class="card-title mb-4">Basic example</h3>

            <div class="overflow-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="border overflow-hidden bg-dark border-gray-500">
                        <table class="min-w-full divide-y divide-gray-500">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-white">Name</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-white">Phone Number</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-white">Date of Birth</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-white">Country</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-500">
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">Risa D. Pearson</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">336-508-2157</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">July 24, 1950</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-white">Malaysia</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">Ann C. Thompson</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">646-473-2057</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">January 25, 1959</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-white">Belgium</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">Paul J. Friend</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">281-308-0793</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">September 1, 1939</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-white">Australia</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">Sean C. Nguyen</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">269-714-6825</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">February 5, 1994</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-white">Algeria</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h3 class="card-title mb-4">Striped rows</h3>

            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">User</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Account No.</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Balance</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr class="bg-gray-50 dark:bg-gray-900">
                                    <th scope="row" class="flex items-center gap-2 px-4 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="w-8 h-8 rounded-full" src="/images/users/avatar-1.jpg" alt="Jese image">
                                        <div class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Risa D. Pearson</div>
                                    </th>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">AC336 508 2157</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">July 24, 1950</td>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center justify-start space-x-3">
                                            <a href="javascript: void(0);"><i class="ri-settings-3-line text-base"></i></a>
                                            <a href="javascript: void(0);"><i class="ri-delete-bin-2-line text-base"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row" class="flex items-center gap-2 px-4 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="w-8 h-8 rounded-full" src="/images/users/avatar-10.jpg" alt="Jese image">
                                        <div class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Ann C. Thompson</div>
                                    </th>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">SB646 473 2057</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">January 25, 1959</td>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center justify-start space-x-3">
                                            <a href="javascript: void(0);"><i class="ri-settings-3-line text-base"></i></a>
                                            <a href="javascript: void(0);"><i class="ri-delete-bin-2-line text-base"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="bg-gray-50 dark:bg-gray-900">
                                    <th scope="row" class="flex items-center gap-2 px-4 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="w-8 h-8 rounded-full" src="/images/users/avatar-5.jpg" alt="Jese image">
                                        <div class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Paul J. Friend</div>
                                    </th>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">DL281 308 0793</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">September 1, 1939</td>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center justify-start space-x-3">
                                            <a href="javascript: void(0);"><i class="ri-settings-3-line text-base"></i></a>
                                            <a href="javascript: void(0);"><i class="ri-delete-bin-2-line text-base"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row" class="flex items-center gap-2 px-4 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                        <img class="w-8 h-8 rounded-full" src="/images/users/avatar-2.jpg" alt="Jese image">
                                        <div class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Sean C. Nguyen</div>
                                    </th>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">CA269 714 6825</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">February 5, 1994</td>
                                    <td class="px-4 py-4">
                                        <div class="flex items-center justify-start space-x-3">
                                            <a href="javascript: void(0);"><i class="ri-settings-3-line text-base"></i></a>
                                            <a href="javascript: void(0);"><i class="ri-delete-bin-2-line text-base"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h3 class="card-title mb-4">Table head options</h3>

            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-dark">
                                <tr>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-white">Product</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-white">Courier</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-white">Process</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-white">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">ASOS Ridley High Waist</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">FedEx</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                        <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                                            <div class="flex flex-col justify-center overflow-hidden bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Delivered</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Marco Lightweight Shirt</td>
                                    <td class="px-4 py-4 whitespace-nowrap uppercase text-sm text-gray-500 dark:text-gray-200">dhl</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                        <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                                            <div class="flex flex-col justify-center overflow-hidden bg-warning" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Shipped</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Half Sleeve Shirt</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">Bright</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                        <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                                            <div class="flex flex-col justify-center overflow-hidden bg-info" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Order Received</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Lightweight Jacket</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">FedEx</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                        <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                                            <div class="flex flex-col justify-center overflow-hidden bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Delivered</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cargo Pant & Shirt</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">FedEx</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                        <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-gray-700">
                                            <div class="flex flex-col justify-center overflow-hidden bg-danger" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Payment Failed</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h3 class="card-title mb-4">Hoverable rows</h3>

            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Product</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Price</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Quantity</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Amount</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">ASOS Ridley High Waist</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">$79.49</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                        <span class="text-xs text-white bg-primary rounded-md px-1 py-0.5">82 Pcs</span>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">$6,518.18</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Marco Lightweight Shirt</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">$128.50</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                        <span class="text-xs text-white bg-primary rounded-md px-1 py-0.5">37 Pcs</span>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">$4,754.50</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Half Sleeve Shirt</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">$39.99</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                        <span class="text-xs text-white bg-primary rounded-md px-1 py-0.5">64 Pcs</span>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">$2,559.36</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Lightweight Jacket</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">$20.00</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                        <span class="text-xs text-white bg-primary rounded-md px-1 py-0.5">184 Pcs</span>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">$3,680.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h3 class="card-title mb-4">Small table</h3>

            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Product</th>
                                    <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Price</th>
                                    <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Quantity</th>
                                    <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Amount</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">ASOS Ridley High Waist</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">$79.49</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                        <span class="text-xs text-white bg-primary rounded-md px-1 py-0.5">82 Pcs</span>
                                    </td>
                                    <td class="px-2 py-2 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">$6,518.18</td>
                                </tr>

                                <tr>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Marco Lightweight Shirt</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">$128.50</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                        <span class="text-xs text-white bg-primary rounded-md px-1 py-0.5">37 Pcs</span>
                                    </td>
                                    <td class="px-2 py-2 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">$4,754.50</td>
                                </tr>

                                <tr>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Half Sleeve Shirt</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">$39.99</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                        <span class="text-xs text-white bg-primary rounded-md px-1 py-0.5">64 Pcs</span>
                                    </td>
                                    <td class="px-2 py-2 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">$2,559.36</td>
                                </tr>

                                <tr>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Lightweight Jacket</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">$20.00</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                        <span class="text-xs text-white bg-primary rounded-md px-1 py-0.5">184 Pcs</span>
                                    </td>
                                    <td class="px-2 py-2 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">$3,680.00</td>
                                </tr>

                                <tr>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Marco Shoes</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">$28.49</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                        <span class="text-xs text-white bg-primary rounded-md px-1 py-0.5">69 Pcs</span>
                                    </td>
                                    <td class="px-2 py-2 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">$1,965.81</td>
                                </tr>

                                <tr>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">ASOS Ridley High Waist</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">$79.49</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">
                                        <span class="text-xs text-white bg-primary rounded-md px-1 py-0.5">82 Pcs</span>
                                    </td>
                                    <td class="px-2 py-2 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">$6,518.18</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h3 class="card-title mb-4">Bordered table</h3>

            <div class="relative overflow-auto">
                <table class="border-collapse min-w-full border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-sm shadow-sm">
                    <thead class="bg-slate-50 dark:bg-slate-700">
                        <tr>
                            <th class="border border-slate-300 dark:border-slate-600 font-semibold px-4 py-4 text-slate-900 dark:text-slate-200 text-start">User</th>
                            <th class="border border-slate-300 dark:border-slate-600 font-semibold px-4 py-4 text-slate-900 dark:text-slate-200 text-start">Account No.</th>
                            <th class="border border-slate-300 dark:border-slate-600 font-semibold px-4 py-4 text-slate-900 dark:text-slate-200 text-start">Balance</th>
                            <th class="border border-slate-300 dark:border-slate-600 font-semibold px-4 py-4 text-slate-900 dark:text-slate-200 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="p-4">
                            <th scope="row" class="flex items-center gap-2 px-4 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-8 h-8 rounded-full" src="/images/users/avatar-1.jpg" alt="Jese image">
                                <div class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Risa D. Pearson</div>
                            </th>
                            <td class="border border-slate-300 dark:border-slate-700 px-4 py-4 text-slate-500 dark:text-slate-400">AC336 508 2157</td>
                            <td class="border border-slate-300 dark:border-slate-700 px-4 py-4 text-slate-500 dark:text-slate-400">July 24, 1950</td>
                            <td class="border border-slate-300 dark:border-slate-700 px-4 py-4 text-slate-500 dark:text-slate-400 text-center">
                                <a href="javascript: void(0);"><i class="ri-delete-bin-2-line text-base"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="flex items-center gap-2 px-4 py-4 text-gray-900 whitespace-nowrap border-t border-slate-300 dark:border-slate-700 dark:text-white">
                                <img class="w-8 h-8 rounded-full" src="/images/users/avatar-10.jpg" alt="Jese image">
                                <div class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Ann C. Thompson</div>
                            </th>
                            <td class="border border-slate-300 dark:border-slate-700 px-4 py-4 text-slate-500 dark:text-slate-400">SB646 473 2057</td>
                            <td class="border border-slate-300 dark:border-slate-700 px-4 py-4 text-slate-500 dark:text-slate-400">January 25, 1959</td>
                            <td class="border border-slate-300 dark:border-slate-700 px-4 py-4 text-slate-500 dark:text-slate-400 text-center">
                                <a href="javascript: void(0);"><i class="ri-delete-bin-2-line text-base"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="flex items-center gap-2 px-4 py-4 text-gray-900 whitespace-nowrap border-t border-slate-300 dark:border-slate-700 dark:text-white">
                                <img class="w-8 h-8 rounded-full" src="/images/users/avatar-5.jpg" alt="Jese image">
                                <div class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Paul J. Friend</div>
                            </th>
                            <td class="border border-slate-300 dark:border-slate-700 px-4 py-4 text-slate-500 dark:text-slate-400">DL281 308 0793</td>
                            <td class="border border-slate-300 dark:border-slate-700 px-4 py-4 text-slate-500 dark:text-slate-400">September 1, 1939</td>
                            <td class="border border-slate-300 dark:border-slate-700 px-4 py-4 text-slate-500 dark:text-slate-400 text-center">
                                <a href="javascript: void(0);"><i class="ri-delete-bin-2-line text-base"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="flex items-center gap-2 px-4 py-4 text-gray-900 whitespace-nowrap border-t border-slate-300 dark:border-slate-700 dark:text-white">
                                <img class="w-8 h-8 rounded-full" src="/images/users/avatar-3.jpg" alt="Jese image">
                                <div class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Sean C. Nguyen</div>
                            </th>
                            <td class="border border-slate-300 dark:border-slate-700 px-4 py-4 text-slate-500 dark:text-slate-400">CA269 714 6825</td>
                            <td class="border border-slate-300 dark:border-slate-700 px-4 py-4 text-slate-500 dark:text-slate-400">February 5, 1994</td>
                            <td class="border border-slate-300 dark:border-slate-700 px-4 py-4 text-slate-500 dark:text-slate-400 text-center">
                                <a href="javascript: void(0);"><i class="ri-delete-bin-2-line text-base"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h3 class="card-title mb-4">Bordered color table</h3>

            <div class="relative overflow-auto">
                <table class="border-collapse min-w-full border border-primary dark:border-slate-600 bg-white dark:bg-slate-800 text-sm shadow-sm">
                    <thead class="bg-slate-50 dark:bg-slate-700">
                        <tr>
                            <th class="border border-primary dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-start">User</th>
                            <th class="border border-primary dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-start">Account No.</th>
                            <th class="border border-primary dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-start">Balance</th>
                            <th class="border border-primary dark:border-slate-600 font-semibold p-4 text-slate-900 dark:text-slate-200 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="flex items-center gap-2 px-4 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-8 h-8 rounded-full" src="/images/users/avatar-1.jpg" alt="Jese image">
                                <div class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Risa D. Pearson</div>
                            </th>
                            <td class="border border-primary dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">AC336 508 2157</td>
                            <td class="border border-primary dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">July 24, 1950</td>
                            <td class="border border-primary dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400 text-center">
                                <a href="javascript: void(0);"><i class="ri-delete-bin-2-line text-base"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="flex items-center gap-2 px-6 py-4 text-gray-900 whitespace-nowrap border-t border-primary dark:border-slate-700 dark:text-white">
                                <img class="w-8 h-8 rounded-full" src="/images/users/avatar-10.jpg" alt="Jese image">
                                <div class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Ann C. Thompson</div>
                            </th>
                            <td class="border border-primary dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">SB646 473 2057</td>
                            <td class="border border-primary dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">January 25, 1959</td>
                            <td class="border border-primary dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400 text-center">
                                <a href="javascript: void(0);"><i class="ri-delete-bin-2-line text-base"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="flex items-center gap-2 px-6 py-4 text-gray-900 whitespace-nowrap border-t border-primary dark:border-slate-700 dark:text-white">
                                <img class="w-8 h-8 rounded-full" src="/images/users/avatar-5.jpg" alt="Jese image">
                                <div class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Paul J. Friend</div>
                            </th>
                            <td class="border border-primary dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">DL281 308 0793</td>
                            <td class="border border-primary dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">September 1, 1939</td>
                            <td class="border border-primary dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400 text-center">
                                <a href="javascript: void(0);"><i class="ri-delete-bin-2-line text-base"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row" class="flex items-center gap-2 px-6 py-4 text-gray-900 whitespace-nowrap border-t border-primary dark:border-slate-700 dark:text-white">
                                <img class="w-8 h-8 rounded-full" src="/images/users/avatar-3.jpg" alt="Jese image">
                                <div class="whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Sean C. Nguyen</div>
                            </th>
                            <td class="border border-primary dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">CA269 714 6825</td>
                            <td class="border border-primary dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">February 5, 1994</td>
                            <td class="border border-primary dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400 text-center">
                                <a href="javascript: void(0);"><i class="ri-delete-bin-2-line text-base"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="xl:col-span-2">
        <div class="card">
            <div class="p-6">
                <h3 class="card-title mb-4">Always responsive</h3>

                <div class="overflow-x-auto">
                    <div class="min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">#</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Heading</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Heading</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Heading</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Heading</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Heading</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Heading</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Heading</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Heading</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Heading</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <tr>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">1</th>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                    </tr>

                                    <tr>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">2</th>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                    </tr>

                                    <tr>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">3</th>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Cell</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card -->
    </div><!-- end card -->

    <div class="card">
        <div class="p-6">
            <h3 class="card-title mb-4">Basic Borderless Example</h3>

            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Name</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Phone Number</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Date of Birth</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Risa D. Pearson</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">336-508-2157</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">July 24, 1950</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">India</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Ann C. Thompson</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">646-473-2057</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">January 25, 1959</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">USA</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Paul J. Friend</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">281-308-0793</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">September 1, 1939</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Canada</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Linda G. Smith</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">606-253-1207</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">May 3, 1962</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Brazil</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h3 class="card-title mb-4">Inverse Borderless table</h3>

            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="bg-black">
                                <tr>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-white">Name</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-white">Phone Number</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-white">Date of Birth</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-white">Country</th>
                                </tr>
                            </thead>
                            <tbody class="bg-black">
                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">Risa D. Pearson</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">336-508-2157</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">July 24, 1950</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-white">Malaysia</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">Ann C. Thompson</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">646-473-2057</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">January 25, 1959</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-white">Belgium</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">Paul J. Friend</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">281-308-0793</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">September 1, 1939</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-white">Australia</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-white">Sean C. Nguyen</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">269-714-6825</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-white">February 5, 1994</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-white">Algeria</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h3 class="card-title mb-4">Active tables</h3>

            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Name</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Phone Number</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Date of Birth</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Country</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                <tr class="bg-gray-50 dark:bg-gray-900">
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Risa D. Pearson</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">336-508-2157</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">July 24, 1950</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Belgium</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Ann C. Thompson</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">646-473-2057</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">January 25, 1959</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Malaysia</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Paul J. Friend</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">281-308-0793</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">September 1, 1939</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Algeria</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Linda G. Smith</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200 bg-gray-50 dark:bg-gray-900">606-253-1207</td>
                                    <td class="bg-gray-50 dark:bg-gray-900"></td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Australia</td>
                                </tr>

                                <tr>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Paul J. Friend</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">281-308-0793</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">September 1, 1939</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">India</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

    <div class="card">
        <div class="p-6">
            <h3 class="card-title mb-4">Nesting</h3>

            <div class="overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Name</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Phone Number</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Date of Birth</th>
                                    <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-gray-50 dark:bg-gray-900 border-y border-gray-200 dark:border-gray-700">
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Risa D. Pearson</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">336-508-2157</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">July 24, 1950</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">India</td>
                                </tr>

                                <tr class="">
                                    <td colspan="4" class="p-4">
                                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Name</th>
                                                    <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Phone Number</th>
                                                    <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Date of Birth</th>
                                                    <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Country</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                                    <td class="px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Risa D. Pearson</td>
                                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">336-508-2157</td>
                                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">July 24, 1950</td>
                                                    <td class="px-2 py-2 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Malaysia</td>
                                                </tr>

                                                <tr class="border-b border-gray-200 dark:border-gray-700">
                                                    <td class="px-2 py-2 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Ann C. Thompson</td>
                                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">646-473-2057</td>
                                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">January 25, 1959</td>
                                                    <td class="px-2 py-2 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Malaysia</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>


                                <tr class="bg-gray-50 dark:bg-gray-900 border-y border-gray-200 dark:border-gray-700">
                                    <td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-500 dark:text-gray-200">Linda G. Smith</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">606-253-1207</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-200">September 2, 1939</td>
                                    <td class="px-4 py-4 whitespace-nowrap text-start text-gray-500 dark:text-gray-200">Belgium</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end card -->

</div>

@endsection