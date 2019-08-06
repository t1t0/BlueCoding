<template>
    <li>
        <a href="#" uk-icon="icon: heart" @click="addFavorite"></a>
    </li>
</template>

<script>
    export default {
        props: ['gif_id'],
        methods:{
            addFavorite(){
                axios.post('/favorites/' + this.gif_id)
                    .then(response =>{
                        alert(response.data);
                    });
            }
        }
    }
</script>