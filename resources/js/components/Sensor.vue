<template>
    <div>
        <div class="px-3" v-for="sensor_suhu in sensor_suhus" v-bind:key="sensor_suhu.id">
            <div href="#" class="card shadow card-body mb-3">
                <h3 class="card-title">Sensor Suhu {{ sensor_suhu.id }}</h3>
                <h4 class="card-subtitle text-muted">{{ sensor_suhu.suhu_air }} &#176 Celcius</h4>
                <p class="card-text font-weight-bold mt-2">Keramba {{ sensor_suhu.keramba_id }}</p>
                <form class="row align-items-center px-3" action="" method="post">

                    <a href="#" class="col btn btn-primary">Edit</a>
                    <button type="button" class="col btn btn-primary" onclick="">Hapus</button>
                </form> 
            </div>
        </div>
        <div class="card-footer py-4">
            <nav class="d-flex justify-content-end" aria-label="...">
                <ul class="pagination">
                    <li v-bind:class="[{disabled: !pagination.prev_page_url}]"
                    class="page-item"><a class="page-link" href="#" @click="fetchSensorSuhu(pagination.prev_page_url)">&#60</a></li>
                    <li class="page-item active"><div class="page-link">{{ pagination.current_page }}</div></li>
                    <li v-bind:class="[{disabled: !pagination.next_page_url}]"
                    class="page-item"><a class="page-link" href="#" @click="fetchSensorSuhu(pagination.next_page_url)">&#62</a></li>
                </ul>
            </nav>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                sensor_suhus: [],
                sensor_suhu: {
                    id: '',
                    suhu_air: '',
                    keramba_id: ''
                }, 
                sensor_suhu_id: '',
                pagination: {},
                edit: false
            }
        },

        created() {
            this.fetchSensorSuhu();
        },

        methods: {
            fetchSensorSuhu(page_url) {
                let vm = this;
                page_url = page_url || 'api/apisensorsuhu'
                fetch(page_url)
                    .then(res => res.json())
                    .then(res => {
                        this.sensor_suhus = res.data;
                        vm.makePagination(res.meta, res.links);
                    })
                    .catch(err => console.log(err));
            },
            makePagination(meta, links){
                let pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev
                }
                this.pagination = pagination;
            }
        }
    }
</script>