<template>
  <div class="container">
    <div class="row mt-2">
      <div class="col-6 offset-3">
        <h3>Login</h3>
        <form action="#" @submit.prevent="handleLogin">
          <div class="form-group">
            <input
              type="email"
              name="email"
              class="form-control"
              placeholder="Email"
              v-model="formData.email"
            />
          </div>
          <div class="form-group">
            <input
              type="passsword"
              name="password"
              class="form-control"
              placeholder="password"
              v-model="formData.password"
            />
          </div>
          <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      secrets: [],
      formData: {
        email: "",
        password: "",
      },
    };
  },
  methods: {
    handleLogin() {
      axios.get("/sanctum/csrf-cookie").then((response) => {
        axios.post("/login", this.formData).then((response) => {
          this.getSecrets();
        });
      });
    },
    getSecrets() {
      axois.get("/api/secrets").then((res) => {
        console.log(res);
      });
    },
  },
};
</script>
