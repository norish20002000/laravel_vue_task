<template>
    <div class="container">
　　　　　<!-- v-modelで変数と入力値を同期させる -->
        <input v-model="condition" class="form-control filter" type="text" placeholder="filter">
        <!-- <div v-for="t in tasks" :key="t.id">
            <p>{{ t.title }}</p>
        </div>
        <p>{{ tasks }}</p> -->
        <div class="list-group">
            <!-- v-forで条件に合致したタスクを繰り返し表示する -->
            <div v-for="task in matched" :key="task.id"
                 class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ task.title }}</h5>
                    <small class="text-muted">{{ task.created_at }}</small>
                </div>
                <p class="mb-1">{{ task.content }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "TaskComponents.vue",
        data: function () {
            return {
                condition: null, //フィルタ条件
                tasks: [] //タスクの配列
            }
        },
        created() {
            //インスタンス生成時にapiからタスク一覧を取得して変数に格納
            axios.get('/api/task').then(response => {
                this.tasks = response.data
            })
        },
        computed: {
            matched: function () {
                //conditionの値が変更されると自動的に呼び出される
                return this.tasks.filter(function (element) {
                    //タイトルにcondionの値を含むものでフィルタ
                    return !this.condition || element.title.indexOf(this.condition) !== -1
                }, this)
            }
        }
    }
</script>

<style scoped>
    .filter {
        margin: 1em 0em;
    }
</style>