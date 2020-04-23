<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">animals <button @click="modalOpen = true">test</button></div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Семейство</th>
                                <th>Кличка</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <template v-for="(data,index) in animals">
                                <tr v-bind:key="data.id">
                                    <td>{{index}}</td>
                                    <td>{{ data.name }}</td>
                                    <td>{{ data.famaly }}</td>
                                    <td>{{ data.nickname }}</td>
                                    <td>
                                        <button @click="removeItem(data.id)">delete</button>
                                    </td>
                                </tr>
                            </template>
                        </tbody>
                    </table>
                    <form @submit.prevent="createAnimal" v-if="modalOpen">
                        <input type="text" v-model="formdata.name">
                        <input type="text" v-model="formdata.nickname">
                        <input type="text" v-model="formdata.famaly">
                        <button type="submit">add</button>
                    </form>
                    
                    
                    <button @click="generate">df</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
    export default {
        data(){
            return {
                formdata: {
                    name: "",
                    nickname: "",
                    famaly: ""
                },
                modalOpen: false,
                animals: []
            }
        },
        methods:({
            generate(){
                this.animals.push({
                    name: "df",
                    nickname: "lexa",
                    famaly: "петух",
                })
            },
            async removeItem(id){
               this.animals = this.animals.filter((item)=>{return item.id !== id})
                const response = await axios.delete(`http://ungads_example.test/api/animals/${id}`)
            },
            async createAnimal(){
               this.animals.push(this.formdata);
            }
        }),
        async created () {
        try {
            const response = await axios.get('http://ungads_example.test/api/animals')
            this.animals = response.data.data
            this.isLoading = false
        } catch (e) {
            // handle the authentication error here
        }
    }
    }
</script> 

