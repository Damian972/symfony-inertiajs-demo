<script>
	import Layout from '../../@shared/Layout.svelte';

	export let post;
</script>

<Layout title="Blog - {post.title}">
	<h1>{post.title}</h1>
	<p>{post.description}</p>
	<div>
		{@html post.content}
	</div>
	<p>Created at: {post.createdAt}</p>
</Layout>
