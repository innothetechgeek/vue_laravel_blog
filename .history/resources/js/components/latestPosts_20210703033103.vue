<template>
<div class="padding-30 rounded bordered">
 <div class="row">


                                  v-for="employee in employees"
                                :key="employee.id"

                                !
    </div>
</div>
</template>
<script>
export default {
    data() {
        return {
            posts: 
            [
               { 
                    title:"The Next 60 Things To Immediately Do About Building",
                    content:"A wonderful serenity has taken possession of my entire soul, like these sweet mornings", 
                    image:"images/posts/latest-sm-1.jpg"
               },
               { 
                    title:"Master The Art Of Nature With These 7 Tips",
                    content:"A wonderful serenity has taken possession of my entire soul, like these sweet mornings", 
                    image:"http://127.0.0.1:8000/images/posts/latest-sm-2.jpg"
               },
               {
                    title:"Facts About Business That Will Help You Success",
                    content:"A wonderful serenity has taken possession of my entire soul, like these sweet mornings", 
                    image:"images/posts/latest-sm-3.jpg"
               },
            ],
        };
    },
    watch: {
        
    },
    created() {
      
    },
    methods: {
       
    }
};
</script