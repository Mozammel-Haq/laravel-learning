<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Student Table</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
  <div class="max-w-4xl mx-auto p-6">
    <h1 class="text-2xl font-semibold mb-4">Student List</h1>

    <div class="bg-white shadow-sm rounded-lg overflow-hidden">
      <table class="min-w-full table-auto">
        <thead class="bg-gray-200">
          <tr>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">ID</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Name</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Class</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Section</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">GPA</th>
            <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Status</th>
          </tr>
        </thead>

        <tbody class="divide-y divide-gray-200 bg-white">
          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 text-sm">101</td>
            <td class="px-6 py-4 text-sm font-semibold">Ayesha Khan</td>
            <td class="px-6 py-4 text-sm">10</td>
            <td class="px-6 py-4 text-sm">A</td>
            <td class="px-6 py-4 text-sm">4.90</td>
            <td class="px-6 py-4 text-sm">
              <span class="px-2 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Passed</span>
            </td>
          </tr>

          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 text-sm">102</td>
            <td class="px-6 py-4 text-sm font-semibold">Rahim Uddin</td>
            <td class="px-6 py-4 text-sm">10</td>
            <td class="px-6 py-4 text-sm">B</td>
            <td class="px-6 py-4 text-sm">3.75</td>
            <td class="px-6 py-4 text-sm">
              <span class="px-2 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Improvement</span>
            </td>
          </tr>

          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 text-sm">103</td>
            <td class="px-6 py-4 text-sm font-semibold">Hasib Ahmed</td>
            <td class="px-6 py-4 text-sm">10</td>
            <td class="px-6 py-4 text-sm">A</td>
            <td class="px-6 py-4 text-sm">2.40</td>
            <td class="px-6 py-4 text-sm">
              <span class="px-2 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">Failed</span>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</body>
</html>
