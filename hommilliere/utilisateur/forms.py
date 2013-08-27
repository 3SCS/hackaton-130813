#-*- coding: utf-8 -*-
from django import forms

class formuser(forms.Form):
	idUtilisateur = forms.CharField(max_length=20)


class formexo(forms.Form):
	oui = forms.BooleanField(help_text=u"OUI", required=False)
	non = forms.BooleanField(help_text=u"NON", required=False)
