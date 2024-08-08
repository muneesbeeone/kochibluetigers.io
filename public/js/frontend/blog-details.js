const { createApp } = Vue;

createApp({
  data() {
    return {
      blogPost: '',
      recentPosts: [],
      formData: {
        name: "",
        email: "",
        phone: "",
      },
    };
  },
  created() {
    const postId = 4;
    this.fetchBlogPostById(postId);
  },
  mounted() {
    fetch("/js/news.json")
      .then((response) => response.json())
      .then((data) => {
        this.recentPosts = data
          .sort((a, b) => {
            return new Date(b.date) - new Date(a.date);
          })
          .slice(0, 10);
      })
      .catch((error) => {
        console.error("Error fetching blog posts:", error);
      });
  },
  methods: {

    fetchBlogPostById(id) {
      fetch("/js/frontend/blog.json")
      .then((response) => response.json())
      .then((data) => {
        this.blogPost = data.find((post) => post.id === id);;
      })
      .catch((error) => {
        console.error("Error fetching blog posts:", error);
      });
    },
  },
}).mount("#blog-details");  
