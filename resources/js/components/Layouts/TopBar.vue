<template>
    <header class="header">
        <div class="container" style="text-align: right">
            {{ cartItemCount }} item(s) in cart (${{ cartTotal }})
        </div>
    </header>
</template>

<script>
    import { mapGetters } from 'vuex'
    export default {
        name: "TopBar",
        computed: {
            ...mapGetters({
                cartItemCount: 'cartItemCount',
                cartTotal: 'cartTotal'
            })
        }
    }
</script>

<style>
    .header {
        background-color: #055720;
        color: #fff;
        padding: 20px;
        margin-bottom: 20px;
    }
</style>
