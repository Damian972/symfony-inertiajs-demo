import '../styles/app.css';

import { InertiaApp } from '@inertiajs/inertia-svelte';
import { InertiaProgress } from '@inertiajs/progress/src';

InertiaProgress.init();

const app = document.getElementById('app');

new InertiaApp({
	target: app,
	props: {
		initialPage: JSON.parse(app.dataset.page),
		resolveComponent: (name) => import(`@/pages/${name}.svelte`),
	},
});
