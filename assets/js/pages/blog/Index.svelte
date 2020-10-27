<script>
	import Layout from '../../@shared/Layout.svelte';
	import PostsList from '../../components/PostsList.svelte';

	export let title = 'Blog';
	export let posts = [];
</script>

<Layout {title}>
	<h1>Blog page</h1>
	<PostsList {posts} />
</Layout>
