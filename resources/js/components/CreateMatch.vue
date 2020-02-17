<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Match</div>
                    <div class="card-body" v-if="!teamSorted">
                        <h5 class="card-title">Sort balanced teams according to skills</h5>
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                <th scope="col">Player</th>
                                <th scope="col">Skill</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(player,index) in players" v-bind:key="index">
                                    <td>{{player.name}}</td>
                                    <td>{{player.skill}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body" v-else>
                        <table class="table table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Team 1</th>
                                    <th scope="col">Team 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="(player,index) in team1" :key="index">
                                    <td>{{player}}</td>
                                    <td>{{team2[index]}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button v-on:click="sortTeam" class="btn btn-primary">Sort teams</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
       data() {
            return {
                players: false,
                team1: [],
                team2: [],
                message: false,
                teamSorted: false,
                errors: []
            }
        },
        computed : {
            sortedPlayers() {
                return this.players.sort((a, b) => { return b.skill - a.skill;});
            }
        },
        created() {
            axios.get(`/api/players`)
            .then(response => {
                this.players = response.data;
            })
            .catch(e => {
                this.errors.push(e)
                this.message = "Unable to get players";
            })
        },
        methods: {
            sortTeam() {
                for(var i=0;i < this.sortedPlayers.length;i++){
                    if(i%2==0) {
                        this.team1.push(this.sortedPlayers[i].name);
                    } else {
                        this.team2.push(this.sortedPlayers[i].name);
                    }
                }
                this.teamSorted = true;
            }
        }
    }
</script>
