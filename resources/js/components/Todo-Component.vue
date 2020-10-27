<template>
    <div class="w-25">
        <form @submit.prevent="saveData">
          <div class="input-group mb-3 w-100">
          <input type="text" class="form-control form-control form-control-lg" aria-label="Recipient's username" aria-describedby="basic-addon2">
          <div class="input-group-append">
          <button class="btn btn-success" type="submit">Add this to your List</button>
         </div>
         </div>
        </form>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                 form: new form({
                    title: '', 
                 })
            }
        },
     methods:{
         saveData(){
             let data = new formData();
             data.append('title',this.form.title)
             axios.post('/api/todo',data)
         }
     },
        mounted() {
        }
    }
</script>
