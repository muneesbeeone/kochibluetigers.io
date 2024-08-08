const { createApp } = Vue;

createApp({
  data() {
    return {
      blogPosts: [],
      recentPosts: [],
    };
  },
  mounted() {
    fetch("js/news.json")
      .then((response) => response.json())
      .then((data) => {
        this.blogPosts = data;
        this.recentPosts = data
          .sort((a, b) => {
            return new Date(b.date) - new Date(a.date);
          })
          .slice(0, 8);
      })
      .catch((error) => {
        console.error("Error fetching blog posts:", error);
      });
  },
  methods: {
    
  },
}).mount("#blog");
