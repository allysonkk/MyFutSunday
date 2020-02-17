<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register Player</div>
                    <div class="card-body">
                        <form @submit.prevent="handleSubmit">
                            <div class="form-group">
                                <label for="InputPlayerName">Player Name</label>
                                <input type="text" class="form-control" v-model="player.name" id="InputPlayerName" name="player_name">
                            </div>

                            <div class="form-group">
                                <label for="InputPlayerSkillLevel">Player Skill Level</label>
                                <input type="range" class="form-control-range" v-model="player.skill" id="InputPlayerSkillLevel" value="5" min="0" max="10" name="skill_level">
                            </div>

                            <button type="submit" class="btn btn-primary">Register Player</button>
                            <hr>
                            <div v-if="message" class="alert alert-success" role="alert">
                                {{message}}
                            </div>

                            <div v-if="errors.length > 0" class="alert alert-danger" role="alert">
                               {{message}}
                            </div>            
                        </form>
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
                player: {
                    name: '',
                    skill: 5
                },
                message: false,
                errors: []
            }
        },
        methods: {
            /**
             * save player
             */
            handleSubmit() {

                this.message = '';
                this.errors = [];

                axios.post(`/api/player`, {
                    player: this.player
                })
                .then(response => {
                    /* rest player */
                    this.player = {name:'',skill:5};
                    this.message = "player registered succesfully";
                })
                .catch(e => {
                    this.errors.push(e)
                    this.message = "Unable to register player";
                }).then(()=>{
                    setTimeout(()=>{
                        this.message = '';
                        this.errors = [];
                    },2000);
                })
            }
        }
    }
</script>
