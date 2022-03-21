<template>
    <div>
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <input id="search" type="text">
            <div id="results"></div>   
        </div>
    </div>
    </div>
</template>

<script>
const client = new MeiliSearch({
    host: 'http://127.0.0.1:7700',
});

const index = client.index('users')
const input = document.querySelector('#search')

input.addEventListener('keyup', event => {
    console.log('ok');
    index.search(event.target.value)
    .then(response => {
        let nodes = response.hits.map(user => {
            let div = document.createElement('div');
            div.textContent = user.name;
            return div;
        });
        let results = document.querySelector('#results');
        results.innerHTML = '';
        results.append(...nodes);
    })
})

export default {

}
</script>