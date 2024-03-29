<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User List</div>
                 
                <div class="card-body">
                <table>
                    <tr>
                        <th width="50%">id</th>
                        <th width="50%">name</th>
                    </tr>
                    <tr v-for="user in users" :key="user.id">
                        <td>{{ user.id }}</td>
                        <td>{{ user.name }}</td>
                    </tr>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
</template>
<script>
    export default {
        data() {
            return {
              users: {},
            }
        },
        methods: {
            getUser(){
                axios.get('/list')
                     .then((response)=>{
                       this.users = response.data.users
                     })
            }
        },
        created() {
            this.getUser()
        }
    }
</script> 