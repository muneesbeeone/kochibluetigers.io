const { createApp } = Vue;

createApp({
  data() {
    return {
      phone: "+91 960 563 9333",
      email: "hr@beeinternational.co.in",
      address: "Panampilly Nagar, Kochi, Kerala",
      country: {
        name: "INDIA",
        flag: "/img/frontend/india.png",
        map:
          "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.6438966647784!2d76.29380467387868!3d9.963556573663102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0872c87071d049%3A0xc3d18a267df69fc3!2sBee%20International%20Immigration%20%26%20Study%20Abroad!5e0!3m2!1sen!2sin!4v1696342875641!5m2!1sen!2sin",
      },
      countries: [
        {
          name: "INDIA",
          value: "ind",
          flag: "/img/frontend/india.png",
          address:
            "Bee International Consultancy Private Limited,2nd Floor, 55/9243rd Cross Road, Panampilly Nagar,Ernakulam, Kerala Ph: 0484 - 3572009",
        },
        {
          name: "UAE",
          value: "uae",
          flag: "/img/frontend/uae.png",
          address:
            "Bee International Consultancy Private Limited,R A G Global Business Hub G 01 Hilal bank building Al-Qusais-2Dubai P.O Box - 237951 04-2217745",
        },
      ],
      formData: {
        name: "",
        email: "",
        phone: "",
        message: "",
        type: "get_in_touch",
      },
      isSubmitting: false,
      successMessage: "",
      successModalVisible: false,
    };
  },
  methods: {
    toggleAccordion(index) {
      if (this.activeItem === index) {
        this.activeItem = null;
      } else {
        this.activeItem = index;
      }
    },
    changeCountry(val) {
      var vm = this;
      if (val === "ind") {
        vm.country = {
          name: "INDIA",
          flag: "/img/frontend/india.png",
          map:
            "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.6438966647784!2d76.29380467387868!3d9.963556573663102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0872c87071d049%3A0xc3d18a267df69fc3!2sBee%20International%20Immigration%20%26%20Study%20Abroad!5e0!3m2!1sen!2sin!4v1696342875641!5m2!1sen!2sin",
        };
        vm.phone = "+91 960 563 9333";
        vm.email = "hr@beeinternational.co.in";
        vm.address = "Panampilly Nagar, Kochi, Kerala";
      } else {
        vm.country = {
          name: "UAE",
          flag: "/img/frontend/uae.png",
          map:
            "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d57731.421301376315!2d55.3459961!3d25.2633913!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d7b880ef5c1%3A0x9d89340c131ff4f0!2sBee%20International%20Educational%20Service!5e0!3m2!1sen!2sin!4v1696509036790!5m2!1sen!2sin",
        };
        vm.phone = "+971 522334 255";
        vm.email = "remya@beeinternational.co.in";
        vm.address = "R A G Global Business Hub G 01";
      }
    },
    toggleDialog() {
      $("#success-dialog").modal("show");
      setTimeout(() => {
        $("#success-dialog").modal("hide"); // Hide the Bootstrap modal
      }, 3000);
    },
    submitFormEnquiry() {
      this.isSubmitting = true;
      this.successMessage = "";
      axios
        .post("/contact/sendEnquiry", this.formData)
        .then((response) => {
          this.successMessage = response.data.message;
          this.formData = {
            name: "",
            email: "",
            phone: "",
            message: "",
          };
          $("#exampleModalToggle").modal("hide");
          this.toggleDialog()
        })
        .catch((error) => {
          this.errorMessage = "An error occurred. Please try again later.";
        })
        .finally(() => {
          this.isSubmitting = false;
        });
    },
  },
}).mount("#contact");
