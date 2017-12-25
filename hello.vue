<template lang="jade">
	div
		p {{msg}} world!

	other-component	
</template>

<script>
	import OtherComponent from './OtherComponent.vue'

	export default {
		data(){
			return{
				msg:'hello'
			}
		},
		components:{
			OtherComponent
		}
	}
</script>

<style lang="stylus" scoped>
	p
		font-size 2em
		text-align center
</style>