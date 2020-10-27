<script>
	import { inertia } from '@inertiajs/inertia-svelte';

	export let posts = [];
</script>

<ul>
	{#each posts as post}
		<li><a use:inertia href="/blog/post/{post.id}">{post.title}</a></li>
	{/each}
</ul>
