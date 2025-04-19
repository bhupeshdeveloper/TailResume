<?php include 'header.php'; ?>
<section class="py-16 bg-gray-50" x-data="{
  filter: 'all',
  search: '',
  projects: [
    { title: 'TailResume', desc: 'Resume builder with PHP, Tailwind, Docker', category: 'php', tag: 'PHP', link: '#' },
    { title: 'RealTime Chat', desc: 'Live chat with Node.js + Socket.io', category: 'node', tag: 'Node.js', link: '#' },
    { title: 'UI Kit', desc: 'Beautiful UI/UX component kit', category: 'uiux', tag: 'UI/UX', link: '#' },
    { title: 'Blog CMS', desc: 'Custom CMS using PHP & MySQL', category: 'php', tag: 'PHP', link: '#' }
  ]
}">
  <div class="container mx-auto">
    <h2 class="text-3xl font-bold text-center mb-8">My Projects</h2>

    <!-- Filter & Search Controls -->
    <div class="flex flex-wrap justify-center items-center gap-4 mb-10">
      <button @click="filter = 'all'" :class="filter === 'all' ? 'bg-blue-600 text-white' : 'bg-gray-200'" class="px-4 py-2 rounded hover:bg-blue-500">All</button>
      <button @click="filter = 'php'" :class="filter === 'php' ? 'bg-blue-600 text-white' : 'bg-gray-200'" class="px-4 py-2 rounded hover:bg-blue-500">PHP</button>
      <button @click="filter = 'node'" :class="filter === 'node' ? 'bg-blue-600 text-white' : 'bg-gray-200'" class="px-4 py-2 rounded hover:bg-blue-500">Node.js</button>
      <button @click="filter = 'uiux'" :class="filter === 'uiux' ? 'bg-blue-600 text-white' : 'bg-gray-200'" class="px-4 py-2 rounded hover:bg-blue-500">UI/UX</button>

      <!-- Search Box -->
      <input type="text" x-model="search" placeholder="Search projects..." class="ml-4 px-4 py-2 border rounded w-64" />
    </div>

    <!-- Projects Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <template x-for="project in projects.filter(p => 
          (filter === 'all' || p.category === filter) &&
          (p.title.toLowerCase().includes(search.toLowerCase()) || p.desc.toLowerCase().includes(search.toLowerCase()))
        )" :key="project.title">
        <div class="bg-white shadow rounded-lg p-6 transition-transform duration-300 hover:-translate-y-1">
          <h3 class="text-xl font-semibold mb-2" x-text="project.title"></h3>
          <p class="text-gray-600" x-text="project.desc"></p>
          <span class="inline-block mt-3 text-xs px-3 py-1 rounded-full bg-blue-100 text-blue-800" x-text="project.tag"></span>
          <a :href="project.link" target="_blank" class="block mt-4 text-blue-600 hover:underline text-sm">View Project →</a>
        </div>
      </template>
    </div>
  </div>
</section>
<?php include 'footer.php'; ?>
