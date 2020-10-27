<script>
	import Layout from '../@shared/Layout.svelte';
	import Greeting from '../components/Greeting.svelte';

	export let title = 'Home';
	export let person = 'John';
</script>

<Layout {title}>
	<Greeting {...person} />
</Layout>
