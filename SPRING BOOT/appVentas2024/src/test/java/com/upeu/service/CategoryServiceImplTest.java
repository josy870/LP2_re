package com.upeu.service;

import org.springframework.beans.factory.annotation.Autowired;

import com.upeu.repository.CategoryRepository;

class CategoryServiceImpl implements CategoryService{

	@Autowired
	private CategoryRepository categoryRepository;
	@Override
	public List<Category> listAllCategories() {
		// TODO Auto-generated method stub
		return null;
	}


}
