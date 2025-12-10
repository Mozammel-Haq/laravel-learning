<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Student Form</title>
</head>

<body class="bg-gray-100">
  <div class="max-w-xl mx-auto bg-white mt-10 p-6 shadow-md rounded-lg">
    <h1 class="text-xl font-semibold mb-4">Student Update Form - ID: {{ $id }}</h1>

    <form class="space-y-4">

      <!-- Student Name -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Student Name</label>
        <input 
          type="text"
          class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
          placeholder="Enter full name"
        />
      </div>

      <!-- Roll -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Roll Number</label>
        <input 
          type="number"
          class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
          placeholder="Enter roll number"
        />
      </div>

      <!-- Class and Section -->
      <div class="grid grid-cols-2 gap-4">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Class</label>
          <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            <option value="">Select class</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
          </select>
        </div>

        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Section</label>
          <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
            <option value="">Select section</option>
            <option>A</option>
            <option>B</option>
            <option>C</option>
          </select>
        </div>
      </div>

      <!-- Email -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input 
          type="email"
          class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
          placeholder="Enter email"
        />
      </div>

      <!-- Phone -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
        <input 
          type="text"
          class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
          placeholder="Enter phone number"
        />
      </div>

      <!-- Status -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
        <select class="w-full border border-gray-300 rounded-md px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none">
          <option value="">Select status</option>
          <option>Active</option>
          <option>Inactive</option>
        </select>
      </div>

      <!-- Submit -->
      <button 
        type="submit"
        class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700 transition">
        Submit
      </button>

    </form>
  </div>
</body>
</html>
