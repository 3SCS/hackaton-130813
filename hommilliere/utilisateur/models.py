#-*- coding: utf-8 -*-
from django.db import models

class utilisateurtable(models.Model):
	id_last_item = models.TextField(null = True)
	id_penultimate_item = models.TextField(null = True)
	id_ante_penultimate_item = models.TextField(null = True)
	id_ante_ante_penultimate_item = models.TextField(null = True)	
	def __unicode__(self):
		"""
Cette méthode que nous définirons dans tous les modèles
nous permettra de reconnaître facilement les différents objets que
nous
traiterons plus tard et dans l'administration
		"""
		return u"%s" % self.id



#lq relqtion c pedagogic_item.pinexttable
class pedagogic_item_tablefictif(models.Model):
	#id item gerer directement par django	
	

	def __unicode__(self):
		"""
Cette méthode que nous définirons dans tous les modèles
nous permettra de reconnaître facilement les différents objets que
nous
traiterons plus tard et dans l'administration
	"""
		return u"%s" % self.id





#lq relqtion c pedagogic_item.pinexttable
class pedagogic_item(models.Model):
	#id item gerer directement par django	
	link_to_courses = models.TextField()
	link_to_exo = models.TextField()
	def __unicode__(self):
		"""
Cette méthode que nous définirons dans tous les modèles
nous permettra de reconnaître facilement les différents objets que
nous
traiterons plus tard et dans l'administration
	"""
		return u"%s" % self.id





class link_to_next_possible_pi(models.Model):
	iditemfk = models.TextField()#on reference la collone
	iditemnextfk = models.TextField()#on reference la colonne fictif
	d_a_pos_ph = models.FloatField(null = True)
	d_a_neg_ph = models.FloatField(null = True)
	#d_a_pos_ph_d_a_neg_ph = models.FloatField(null = True)
	
	def __unicode__(self):
		"""
Cette méthode que nous définirons dans tous les modèles
nous permettra de reconnaître facilement les différents objets que
nous
traiterons plus tard et dans l'administration
		"""
		return u" %s" % self.iditemfk




