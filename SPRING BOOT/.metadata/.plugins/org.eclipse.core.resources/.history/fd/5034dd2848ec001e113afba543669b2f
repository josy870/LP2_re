package com.upeu.service;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;

import com.upeu.entity.Category;
import com.upeu.repository.CategoryRepository;

public class categoryServiceImpl implements CategoryService{
	@Autowired
	private CategoryRepository categoryRepository;
	@Override
	public List<Category> listALLCategories() {
		
		return categoryRepository.findAll();
	}
	@Override
	public List<Category> listAllCategories() {
		// TODO Auto-generated method stub
		return null;
	}

}