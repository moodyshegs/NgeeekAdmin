<template>
    <div class="container">
        <div class="row mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Users</h3>

                <div class="card-tools">
                    <button class="btn btn-success" @click="newModal">Add New <i class="fas fa-user-plus fa-fw"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <tbody>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Type</th>
                      <th>Registered at</th>
                      <th>Modify</th>
                    </tr>
                      
                    <tr v-for="user in users" :key="user.id">
                      <td>{{ user.id}}</td>
                      <td>{{ user.name}}</td>
                      <td>{{user.email}}</td>
                      <td>{{user.type | up-Text}}</td>
                      <td>{{user.created_at | myDate}}</td>

                      <td>
                          <a href="#" @click="editModal(user)">
                              <i class="fa fa-edit blue"></i>
                          </a>
                           /
                          <a href="#" @click="deleteuser(user.id)">
                              <i class="fa fa-trash red"></i>
                          </a>
                      </td>
                   </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" v-show="!editmode" id="exampleModalLabel">Add New</h5>
                <h5 class="modal-title" v-show="editmode" id="exampleModalLabel">Update User's Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form @submit.prevent="editmode ? updateUser() : createUser()">

                   <div class="modal-body">
                    <div class="form-group">
                      <input v-model="form.name" type="text" name="name"
                        placeholder="Name"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('username') }">
                      <has-error :form="form" field="name"></has-error>
                    </div>

                    <div class="form-group">
                      <input v-model="form.email" type="email" name="email"
                        placeholder="Email Address"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                      <has-error :form="form" field="email"></has-error>
                    </div>
 
                    <div class="form-group">
                      <textarea v-model="form.bio" name="bio" id="bio"
                        placeholder="Short bio for user (Optional)"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }"></textarea>
                      <has-error :form="form" field="bio"></has-error>
                    </div>
                    
                    <div class="form-group">
                      <select name = "type" v-model="form.type" id="type" 
                        class="form-control" :class="{ 'is-invalid': form.errors.has('type') }">
                        <option value="">Select User Role</option>
                        <option value="admin">Admin</option>
                        <option value="user">Standard User</option>
                        <option value="author">Author</option>
                      </select>
                      <has-error :form="form" field="type"></has-error>
                    </div>

                     <div class="form-group">
                      <input v-model="form.password" type="password" name="password" id="password"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                      <has-error :form="form" field="password"></has-error>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close <i class="fa fa-window-close"></i></button>
                <button v-show="editmode" type="submit" class="btn btn-success">Update <i class="fa fa-plus-circle"></i></button>
                <button v-show="!editmode" type="submit" class="btn btn-primary">Create <i class="fa fa-plus-circle"></i></button>
              </div>

              </form>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
 import axios from 'axios';
    export default {
      data(){
        return{
          editmode: true,
          users : {},
          form: new Form({
            id: '',
            name : '',
            email : '',
            password : '',
            type: '',
            bio : '',
            photo: ''
          })
        }
        },
        methods:{
          updateUser(){
            this.$Progress.start();
            this.form.put('api/user/'+ this.form.id)
            .then(()=>{
              //success
              $('#addNew').modal('hide');
               Swal.fire(
                  'Updated!',
                  'Your information has been updated.',
                  'success'
                )
                this.$Progress.finish();
                Fire.$emit('Aftercreate');
            })
            .catch(() =>{
              this.$Progress.fail();
            });
          },
          editModal(user){
             this.editmode = true;
             this.form.reset()
            $('#addNew').modal('show');
            this.form.fill(user);
          },
          newModal(){
             this.editmode = false;
             this.form.reset()
            $('#addNew').modal('show');
          },

          deleteuser(id){
                 Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {

              // send request to server
              if (result.isConfirmed) {
              this.form.delete('api/user/'+id).then(()=>{
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              
                Fire.$emit('Aftercreate');
              }).catch(()=> {
                swal.fire("failed", "there is something wrong!", "warning");
              });
              }
            })
            
          },
         loadUsers() {
            axios.get('api/user')
                .then(({ data }) => (this.users = data.data));

         },
         createUser(){
            this.$Progress.start();

            this.form.post('api/user')
            .then(()=>{
            Fire.$emit('Aftercreate');

            $('#addNew').modal('hide')
                
            Toast.fire({
                  type: 'success',
                  title: 'User Created successfully'
              })

              this.$Progress.finish();
         })
         .catch(()=>{

         })
         }
        },  
     created() {
     this.loadUsers(); 
     //Fire.$on('Aftercreate',this.loadUsers);
       Fire.$on('Aftercreate',() => {
         this.loadUsers();
       });
       //      setInterval(this.loadUsers,5000);
        }
        }
</script>