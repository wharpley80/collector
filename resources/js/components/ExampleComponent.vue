<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
        
                            <div>
                                <h3>{{colors}}</h3>

                            </div>
              
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    
        export default {
            name: 'example-component',
            props : ['colors'],
            mounted() {
                console.log(this.colors);
            }
        };
</script>
