<script>
	import { inertia } from '@inertiajs/inertia-svelte'
	import Greeting from '../components/Greeting.svelte';

	export let person = 'John';
</script>

<Greeting {...person}></Greeting>


<a use:inertia href="/blog" class="btn-indigo">Blog</a>