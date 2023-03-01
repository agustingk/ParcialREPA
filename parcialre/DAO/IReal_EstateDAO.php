<?php
    namespace DAO;

    use Models\real_estate as real_estate;

    interface IReal_EstateDAO{
        function Add(real_estate $real_estate);
        function GetAll();
        function remove($id);
    }
?>