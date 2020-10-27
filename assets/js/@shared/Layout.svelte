<script>
	import { inertia } from '@inertiajs/inertia-svelte';

	export let title;
</script>

<svelte:head>
	<title>{title}</title>
</svelte:head>

<main>
	<header>
		<a use:inertia href="/">Home</a>
		<a use:inertia href="/about">About</a>
		<a use:inertia href="/blog">Blog</a>
	</header>

	<slot />
</main>
