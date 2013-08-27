# Create your views here.
id = int()
iditemcourant = int()
#-*- coding: utf-8 -*-
from django.http import HttpResponse
from django.shortcuts import render , redirect
from utilisateur.forms import *
from utilisateur.models import *
#import time
from django.core.urlresolvers import reverse
def utilisateur(request):
	if request.method == 'POST':
		form = formuser(request.POST) 
		if form.is_valid():
			
			global id
			id = int(form.cleaned_data['idUtilisateur'])
			listeid = list()			
			for i in utilisateurtable.objects.all(): 
				listeid.append(i.id)
			if id in listeid:
				return redirect("index")#ici lien vers acceuil du site	
			else:
				return redirect("authentification")#ici lien vers acceuil du site

	else: 
		form = formuser()
	#return render(request, 'index.html', locals())
	return render(request, 'index2.html', locals())


def index(request):
	return render(request, 'index.html', {})



def genereid(request):
	#iduser = str(time.time())
	#list = iduser.split('.')
	#iduser = "".join(list)
	#iduser = 'votre nouveau id est :' + iduser 	
	connecte = utilisateurtable.objects.create()
	connecte.id = str(connecte.id)
	
	return HttpResponse(connecte.id)


def listitemmath(request):
	return render(request, 'listitemmath.html', locals())

#################################################################


def equation_du_premier_degre(request):
	a = pedagogic_item.objects.get(id = iditemcourant)
	exo = reverse(a.link_to_exo)
	return render(request, 'eq1.html', locals())



def equation_du_second(request):
	a = pedagogic_item.objects.get(id = iditemcourant)
	exo = reverse(a.link_to_exo)
	return render(request, 'eq2.html', locals())

def derivee(request):
	a = pedagogic_item.objects.get(id = iditemcourant)
	exo = reverse(a.link_to_exo)

	return render(request, 'derivee.html', locals())

def primitive(request):
	a = pedagogic_item.objects.get(id = iditemcourant)
	exo = reverse(a.link_to_exo)

	return render(request, 'primitive.html', locals())

def equation_differentiel(request):
	a = pedagogic_item.objects.get(id = iditemcourant)
	exo = reverse(a.link_to_exo)

	return render(request, 'eqdiff.html', locals())


def equation_du_premier_degreexo(request  ):
	if request.method == 'POST':
		form = formexo(request.POST) 
		if form.is_valid():
			oui = form.cleaned_data['oui']
			non = form.cleaned_data['non']
			reussite = bool()
			if oui is True and non is False:
				reussite = True
			else:
				reussite = False
			if reussite:#il a reussi lexercice ce qui veut dire deja qu'il a fini un item
				#chargeons les informations de la base utilisateur
				utilisateur = utilisateurtable.objects.get(id = id)
				#decalage   on a 4 items car 4 neuds constituent un chemin de 3arretes a retribuer
				utilisateur.id_ante_ante_penultimate_item = utilisateur.id_ante_penultimate_item				
				utilisateur.id_ante_penultimate_item = utilisateur.id_penultimate_item
				utilisateur.id_penultimate_item	= utilisateur.id_last_item
				utilisateur.id_last_item = iditemcourant
				utilisateur.save()

				#verifions que utilisateur.id_penultimate_item n'est pas nul			
				if utilisateur.id_penultimate_item != None :
					last_link = link_to_next_possible_pi.objects.get(iditemfk=utilisateur.id_penultimate_item, iditemnextfk=utilisateur.id_last_item)	
					if last_link.d_a_pos_ph != None:
						var = float(last_link.d_a_pos_ph)
						var += 3 
						last_link.d_a_pos_ph = str(var)
						last_link.save() 
			
					else:
						var = 3.0
						last_link.d_a_pos_ph = str(var)
						last_link.save()
					
				
				if utilisateur.id_ante_penultimate_item != None :
					penultimate_link = link_to_next_possible_pi.objects.get(iditemfk=utilisateur.id_ante_penultimate_item, iditemnextfk=utilisateur.id_penultimate_item)				
						
					if penultimate_link.d_a_pos_ph != None:
						var = float(penultimate_link.d_a_pos_ph)
						var += 2 
						penultimate_link.d_a_pos_ph = str(var)
						penultimate_link.save() 
			
					else:
						var = 2.0
						penultimate_link.d_a_pos_ph = str(var)
						penultimate_link.save()
				
					
				if utilisateur.id_ante_ante_penultimate_item != None and utilisateur.id_penultimate_item != None :
					ante_penultimate_link = link_to_next_possible_pi.objects.get(iditemfk=utilisateur.id_ante_ante_penultimate_item, iditemnextfk=utilisateur.id_ante_penultimate_item)
						
					if ante_penultimate_link.d_a_pos_ph != None:
						var = float(ante_penultimate_link.d_a_pos_ph)
						var += 1
						ante_penultimate_link.d_a_pos_ph = str(var)
						ante_penultimate_link.save() 
			
					else:
						var = 1.0
						ante_penultimate_link.d_a_pos_ph = str(var)
						ante_penultimate_link.save()
				return redirect("proposelien")
					
			else: #c'est a dire il na valider le test
	#chargeons les informations de la base utilisateur
				utilisateur = utilisateurtable.objects.get(id = id)
				#decalage   on a 4 items car 4 neuds constituent un chemin de 3arretes a retribuer
				utilisateur.id_ante_ante_penultimate_item = utilisateur.id_ante_penultimate_item				
				utilisateur.id_ante_penultimate_item = utilisateur.id_penultimate_item
				utilisateur.id_penultimate_item	= utilisateur.id_last_item
				utilisateur.id_last_item = iditemcourant
				utilisateur.save()

				#verifions que utilisateur.id_penultimate_item n'est pas nul			
				if utilisateur.id_penultimate_item != None :
					last_link = link_to_next_possible_pi.objects.get(iditemfk=utilisateur.id_penultimate_item, iditemnextfk=utilisateur.id_last_item)	
					if last_link.d_a_neg_ph != None:
						var = float(last_link.d_a_neg_ph)
						var -= 3 
						last_link.d_a_neg_ph = str(var)
						last_link.save() 
			
					else:
						var = -3.0
						last_link.d_a_neg_ph = str(var)
						last_link.save()
					
				
				if utilisateur.id_ante_penultimate_item != None :
					penultimate_link = link_to_next_possible_pi.objects.get(iditemfk=utilisateur.id_ante_penultimate_item, iditemnextfk=utilisateur.id_penultimate_item)				
						
					if penultimate_link.d_a_neg_ph != None:
						var = float(penultimate_link.d_a_neg_ph)
						var -= 2 
						penultimate_link.d_a_neg_ph = str(var)
						penultimate_link.save() 
			
					else:
						var = -2.0
						penultimate_link.d_a_neg_ph = str(var)
						penultimate_link.save()
				
					
				if utilisateur.id_ante_ante_penultimate_item != None and utilisateur.id_penultimate_item != None :
					ante_penultimate_link = link_to_next_possible_pi.objects.get(iditemfk=utilisateur.id_ante_ante_penultimate_item, iditemnextfk=utilisateur.id_ante_penultimate_item)
						
					if ante_penultimate_link.d_a_neg_ph != None:
						var = float(ante_penultimate_link.d_a_neg_ph)
						var -= 1
						ante_penultimate_link.d_a_neg_ph = str(var)
						ante_penultimate_link.save() 
			
					else:
						var = -1.0
						ante_penultimate_link.d_a_neg_ph = str(var)
						ante_penultimate_link.save()
				return redirect("proposelien")









	else: 
		form = formexo()
		
	return render(request, 'exoeq1.html', locals())
	


def viewitem(request , iditem):
	#il vient de clicquer sur un item independamment ou pas on sait pas mais on va regarder sil existe deja un chemin entre le dernier item parcouru et l'item courant
		
	 	

	

	#gestion template
	a = pedagogic_item.objects.get(id = iditem)
	lien = reverse(a.link_to_courses)
	
	global iditemcourant
	iditemcourant = iditem#donc voila le nouveau item
	
		#verifions si un chemin entre le dernier lien et le nouveau lien
	utilisateur = utilisateurtable.objects.get(id = id)
	#pour pouvoir avoir un chemin il faut qu'il y ait un noeud precedent au moins 
	if utilisateur.id_last_item != None :#on est sur notre premier item
		precedent = utilisateur.id_last_item
		suivant = iditemcourant
		#si le chemin n'existe pas elle sera creer
		i , boole = link_to_next_possible_pi.objects.get_or_create(iditemfk=precedent, iditemnextfk= suivant) 



		#return HttpResponse(boole)#reussite , 
		listepossiblite = link_to_next_possible_pi.objects.filter(iditemfk = precedent)#si 
		for chemin in listepossiblite:
			
			if chemin.d_a_pos_ph != None:#on ne dimunue pas 
				var = float(chemin.d_a_pos_ph)
				var -= 1
				chemin.d_a_pos_ph = str(var)
				chemin.save()

			else:
				chemin.d_a_pos_ph = '-1'
				chemin.save()	

	return render(request, 'viewitem.html', locals())


def proposelien(request):
	#algorithme de trie des liens
	utilisateur = utilisateurtable.objects.get(id = id)
	liste = link_to_next_possible_pi.objects.filter(iditemfk = utilisateur.id_last_item)#si 
	nombrelien = len(liste)	
	if nombrelien == 1:
		lienlist = pedagogic_item.objects.filter(id = liste[0].iditemnextfk)
		nom_cour = lienlist[0].link_to_courses
		lien = reverse(nom_cour)
	
	return render(request, 'proposelien.html', locals())
