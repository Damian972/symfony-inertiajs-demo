<script>
	import Layout from '../@shared/Layout.svelte';
	import Greeting from '../components/Greeting.svelte';

	export let title = 'Home';
	export let person = { fullName: 'John Doe', job: 'Sailor' };
</script>

<Layout {title}>
	<Greeting {...person} />
</Layout>
