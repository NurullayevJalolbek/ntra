<?php
declare(strict_types=1);

loadPartials("header");
loadPartials("navbar");

  ?>


<div class="bg-white border rounded-lg px-8 py-6 mx-auto my-8 max-w-2xl">
    <h2 class="text-2xl font-medium mb-4">Create Ad</h2>
    <form  action="/create/ads"   method="post">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-medium mb-2  ">Title </label>
            <label for="title"></label><input type="text" id="title" name="title"
                                              class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                                              placeholder="Title"

                                              required>
        </div>
        <div class="mb-4">
            <label for="address" class="block text-gray-700 font-medium mb-2  ">Address</label>
            <label for="address"></label><input type="text" id="address" name="address"
                                              class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                                              placeholder="Adress"

                                              required>
        </div>

        <div class="mb-4">
            <label for="rooms" class="block text-gray-700 font-medium mb-2">Rooms</label>
            <label for="rooms"></label><input type="number" id="rooms" name="rooms"
                                              class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                                              placeholder="Rooms"

                                              required>
        </div>
        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-medium mb-2">Price </label>
            <input type="number" id="price" name="price"
                   class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400"
                   placeholder="Price "

                   required>
        </div>

        <div class="mb-4">
            <label for="gender" class="block text-gray-700 font-medium mb-2">Gender</label>
            <select id="gender" name="gender"
                    class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" required>
                <option value="">Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-medium mb-2"> Branch </label>
            <div class="flex flex-wrap -mx-2">
                <div class="px-2 w-1/3">
                    <label for="color-red" class="block text-gray-700 font-medium mb-2">
                        <input type="radio" id="color-red" name="branch" value="xorazm" class="mr-2">Xorazm
                    </label>
                </div>
            </div>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-medium mb-2"> Description </label>
            <label for="description"></label><textarea id="description" name="description"
                                                       class="border border-gray-400 p-2 w-full rounded-lg focus:outline-none focus:border-blue-400" rows="5"></textarea>
        </div>
        <div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Submit</button>
        </div>

    </form>
</div>
