#-*- coding: utf-8 -*-
from django.conf.urls import patterns, include, url



urlpatterns = patterns('utilisateur.views',
    url(r'^index/$' , 'index' , name = "index"),
    url(r'^acceuil/maths/viewitem/(?P<iditem>\d+)/$' , 'viewitem' , name = "viewitem"),
    url(r'^acceuil/maths/$' , 'listitemmath' , name = "listeitemmath"),
    url(r'^acceuil/$' , 'utilisateur' , name = "authentification"),
    url(r'^generateur/$' , 'genereid'),	

    url(r'^proposelien/$' , 'proposelien',name = 'proposelien'),	



	#lien vers les vues des cours de nos items de maths
    url(r'^acceuil/maths/equation_du_premier_degre/equation_du_premier_degre/$' , 'equation_du_premier_degre' , name = "equation_du_premier_degre"),
    url(r'^acceuil/maths/equation_du_second/$' , 'equation_du_second' , name = "equation_du_second"),
    url(r'^acceuil/maths/derivee/$' , 'derivee' , name = "derivee"),
    url(r'^acceuil/maths/primitive/$' , 'primitive' , name = "primitive"),
    url(r'^acceuil/maths/equation_differentiel/$' , 'equation_differentiel' , name = "equation_differentiel"),
    



	#lien vers les vues des cours de  nos items de maths
    url(r'^acceuil/maths/equation_du_premier_degreexo/$' , 'equation_du_premier_degreexo' , name = "equation_du_premier_degreexo"),
    url('^acceuil/maths/equation_du_secondexo/$' , 'equation_du_premier_degreexo' , name = "equation_du_premier_degreexo"),
    url('^acceuil/maths/deriveeexo/$' , 'equation_du_premier_degreexo' , name = "equation_du_premier_degreexo"),
    url('^acceuil/maths/primitiveexo/$' , 'equation_du_premier_degreexo' , name = "equation_du_premier_degreexo"),
    url('^acceuil/maths/equation_differentielexo/$' , 'equation_du_premier_degreexo' , name = "equation_du_premier_degreexo"),

    
    
   
)
