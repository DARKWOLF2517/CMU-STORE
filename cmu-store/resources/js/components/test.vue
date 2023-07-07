<template>
    <!-- <h4> this is the title {{title}} </h4>
    <button @click="enlarge"  style="font-size: {{size}} + 'px';">Enlarge text</button> --> 

    <div :style="{fontSize: postFonSize + 'em'}">
        <buttons v-for="post in posts"
                :key="post.id"
                :title ="post.title"
                @enlarge-text = "postFonSize += 1.1">
        </buttons>
    
    </div>
</template>

<script>
import buttons from './button.vue'

    export default{ 
        components:{
          buttons  
        },
        data() {
            return {
               posts:[
                    {id: 1, title: 'aaaa'},
                    {id: 2, title: 'bbbb'},
                    {id: 3, title: 'cccc'},
                    
               ],
               postFonSize: 1
            }
        },
    
    }
</script>