<style>
    .content{
    position: relative !important;
    min-height: 100vh !important;
    background-color: #fff !important;
    }
    .img-container{
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: space-between;
    padding: 5px;
    }
    .img-container .image{
    height: 300px;
    width: 350px;
    border: 10px solid #fff;
    box-shadow: 0 5px  15px rgba(0, 0, 0,.1);
    overflow: hidden;
    cursor:pointer;
    }
    .img-container .image img{
    height: 100%;
    width: 100%;
    object-fit: cover;
    transition: .2s linear;

    }
    .img-container .image:hover img{
    transform: scale(1.1);

    }
    .content .popup-image{
    position: fixed;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0,.9);
    height: 100%;
    width: 100%;
    z-index: 100;
    display: none;
    }
    .content .popup-image span{
    position: absolute;
    top: 0;
    right: 10px;
    font-size: 40px;
    font-weight: bolder;
    color: #fff;
    cursor: pointer;
    z-index: 100;
    }
    .content .popup-image img{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    border: 5px solid #fff;
    width: 750px;
    object-fit: cover;
    }

    /*Media queries*/
    @media(max-width:760px) {
    .content .popup-image img{
        width: 95%;
    }
    }
</style>