<?php

    namespace core;
    
    class Paginator{

        public function paginator($itemsOnPage, &$totalItems, $activePage, &$offset){

            $activePage = max(1, $activePage);
            $maxPages   =   round($totalItems/$itemsOnPage);
            if( $activePage > $maxPages )
                $activePage = 1;
            $paginator = array(
                "next"      =>  "disabled",
                "prev"      =>  "disabled",
                "active"    =>  $activePage,
                "last"      =>  "disabled",
                "first"      =>  "disabled",
                "itemsOnPage"      =>  $itemsOnPage,
                "steps"     =>  array()
            );
            if( $activePage-1 > 0 )
                $paginator['prev']  =   $activePage-1;
            if( $activePage < $maxPages )
                $paginator['next']  =   $activePage+1;

            if( $activePage > 2 )
                $paginator['first'] =   1;
            if( $activePage < $maxPages-2 )
                $paginator['last']  =   $maxPages;

            $pageStart  = max(1,$activePage - 2);
            $stepsCount      = 0;
            while( $stepsCount++ < 5  & $pageStart < $maxPages+1){
                if( $pageStart >= 1 ){
                    $paginator['steps'][] = $pageStart;
                }

                $pageStart++;
            }
            $offset = $itemsOnPage*($activePage-1);
            return $paginator;
        }
    }
