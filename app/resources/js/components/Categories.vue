<template>
    <div>
        <form @submit.prevent="addCategory">
            <div class="form-group">
                    <input type="text" class="form-control" placeholder="Title" v-model="category.title"/>
            </div>
             <div class="form-group">
                    <textarea class="form-control" placeholder="Description" v-model="category.description"></textarea>
            </div>
            <button type="submit" @click="addUpdateCategory()" class="btn btn-success">Save</button>
        </form>


        <br/>
        <h2>Listado de categorias</h2>
        <table border="1">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <tr v-for="category in categories" v-bind:key="category.id">
                        <td> {{ category.id }} </td>
                        <td> {{ category.title }} </td>
                        <td> {{ category.description }} </td>
                        <td><button type="button" @click="deleteCategory(category.id)">Delete</button></td>
                        <td><button type="button" @click="updateCategory(category)">Update</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</template>


<script>
    export default{
        data(){
            return{
                categories: [],
                category:[],
                category:{
                    id: '',
                    title: '',
                    description: ''
                },
                update: false,
                category_id: ''
            }
        },
        created(){
            this.getCategories();
        },
        methods: {
            getCategories(api_url){
                api_url = api_url || '/api/categories';
                fetch(api_url)
                    .then(response=>response.json())
                    .then(response=>{
                        this.categories = response.data;
                    })
                    .catch(err=>console.log(err));
            },
            addUpdateCategory(){                

                if(this.update===false){
                    fetch('/api/category',{
                        method: 'post',
                        body: JSON.stringify(this.category),
                        headers: {
                            'content-type': 'application/json'
                        }
                        })
                        .then(response=>response.json())
                        .then(data=>{
                            this.getCategories();
                        })
                        .catch(err=>console.log(err));

                }else{
                    fetch('/api/category/',{
                        method: 'put',
                        body: JSON.stringify(this.category),
                        headers: {
                            'content-type': 'application/json'
                        }
                    })
                    .then(response=>response.json())
                        .then(data=>{
                            this.getCategories();
                        })
                        .catch(err=>console.log(err));
                }
                

            },
            deleteCategory(id){
                fetch('/api/category/' + id,{
                  method: 'delete'
                })
                    .then(response=>response.json())
                    .then(data=>{
                        this.getCategories();
                    })
                    .catch(err=>console.log(err));

            },
            updateCategory(category){
                this.update =true;
                this.category.id = category.id;
                this.category.category_id = category.id;
                this.category.title = category.title;
                this.category.description = category.description;
            }
        }
    };
</script>